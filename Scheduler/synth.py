# Copyright 2019 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import os
# https://github.com/googleapis/artman/pull/655#issuecomment-507784277
os.environ["SYNTHTOOL_ARTMAN_VERSION"] = "0.29.1"
import synthtool as s
import synthtool.gcp as gcp
import logging

logging.basicConfig(level=logging.DEBUG)

gapic = gcp.GAPICGenerator()
common = gcp.CommonTemplates()

for version in ['V1', 'V1Beta1']:
    lower_version = version.lower()

    library = gapic.php_library(
        service='scheduler',
        version=lower_version,
        config_path=f'/google/cloud/scheduler/artman_cloudscheduler_{lower_version}.yaml',
        artman_output_name=f'google-cloud-cloudscheduler-{lower_version}')

    # copy all src
    s.move(library / f'src/{version}')

    # copy proto files to src also
    s.move(library / f'proto/src/Google/Cloud/Scheduler', f'src/')
    s.move(library / f'tests/')

    # copy GPBMetadata file to metadata
    s.move(library / f'proto/src/GPBMetadata/Google/Cloud/Scheduler', f'metadata/')

# fix year
s.replace(
    'src/**/**/*.php',
    r'Copyright \d{4}',
    r'Copyright 2019')
s.replace(
    'tests/**/**/*Test.php',
    r'Copyright \d{4}',
    r'Copyright 2019')

# V1 is GA, so remove @experimental tags
s.replace(
    'src/V1/**/*Client.php',
    r'^(\s+\*\n)?\s+\*\s@experimental\n',
    '')

# Change the wording for the deprecation warning.
s.replace(
    'src/*/*_*.php',
    r'will be removed in the next major release',
    'will be removed in a future release')

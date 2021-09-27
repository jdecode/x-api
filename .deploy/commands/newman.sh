#!/bin/bash
# Custom githook script

#newman - run api tests
newman run ./.deploy/api-v1-dev_postman_collection.json -e ./.deploy/local_postman_environment.json --color=on

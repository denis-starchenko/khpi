#!/bin/bash

status_code=$(curl --write-out %{http_code} --silent --output /dev/null http://foobar.com)
  echo "$status_code"
if [[ "$status_code" -lt 200 || "$status_code" -gt 399 ]]; then
  message="Wrong response from the server api. Http code - $status_code"
  echo "$message" > /home/"$USER"/Documents/test-api-response.log
  echo "$message" | mail -s "HTTP STATUS CHECKER" "Denys.Starchenko@infiz.khpi.edu.ua"
else
  echo "$status_code"
  exit 0
fi
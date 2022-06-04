#!/usr/bin/env bash

for i in {1..100000}
do
   php main.php ./images
   echo "The $i th image." > output.log
done
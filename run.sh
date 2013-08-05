#!/bin/bash

export TZ=UTC

cd /usr/local/Selective-Tweets

php cron/check_stream_tracker.php
php cron/clean_queue.php
php cron/process_queue.php

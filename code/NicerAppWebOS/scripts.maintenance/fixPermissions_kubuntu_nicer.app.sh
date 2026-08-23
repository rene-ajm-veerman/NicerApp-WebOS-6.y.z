#!/bin/bash
while true; do
  mode=$(stat -c %a /run/user/1000)
  if [ "$mode" != "700" ]; then
    echo "$(date): /run/user/1000 is now $mode !"
    # optional: automatically fix it
    chmod 700 /run/user/1000
  fi
  mode=$(stat -c %a /tmp/runtime-gavan)
  if [ "$mode" != "700" ]; then
    echo "$(date): /tmp/runtime-gavan is now $mode !"
    # optional: automatically fix it
     chmod 700 /tmp/runtime-gavan
  fi
  sleep 2
done

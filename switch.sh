#!/bin/bash 
PATH=/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/bin:/usr/local/sbin:~/bin
export PATH
step=2 #间隔的秒数，不能大于60 
for (( i = 0; i < 60; i=(i+step) )); do
    php /www/wwwroot/nc0m4tr/index.php index/coller/profit
    php /www/wwwroot/nc0m4tr/index.php index/coller/product
    php /www/wwwroot/nc0m4tr/index.php index/coller/order
  sleep $step
done
exit 0
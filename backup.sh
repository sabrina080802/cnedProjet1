#!/bin/sh
DATE=date -I
find /home/if036104881/savebdd/bdd* -mtime -1 -exec rm {} ;
mysqldump -u if0_36104881 -p3Fv80QV35WGca4 --databases if0_36104881_mediatekFormation
--single-transaction | gzip > /home/if0_36104881/savebdd/bddbackup${DATE}.sql.gz
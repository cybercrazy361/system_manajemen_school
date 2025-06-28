#!/bin/bash

# Pindahkan file utama dari public ke root
mv -f public/index.php ./
mv -f public/.htaccess ./

# Pindahkan semua folder asset di public ke root (replace lama)
for d in css js images storage; do
  if [ -d public/$d ]; then
    rm -rf $d
    mv -f public/$d ./
  fi
done

# (Optional) Pindahkan file khusus di public
for f in favicon.ico robots.txt; do
  if [ -f public/$f ]; then
    mv -f public/$f ./
  fi
done

# Hapus folder public kalau sudah kosong
rmdir public 2>/dev/null || true

# Edit index.php agar path vendor/bootstrap benar
sed -i 's/..\/vendor/.\/vendor/g' index.php
sed -i 's/..\/bootstrap/.\/bootstrap/g' index.php

echo "=== Deploy Laravel ke shared hosting: SELESAI! ==="

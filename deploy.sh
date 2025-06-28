#!/bin/bash

# Jalankan script ini di root project hosting, misal: /domains/pakarguru.online/public_html

# Pindahkan file utama dari public ke root
mv -f public/index.php ./
mv -f public/.htaccess ./

# Replace semua asset lama di root
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

# Ganti path vendor/bootstrap di index.php (supaya bisa jalan di root)
sed -i 's/..\/vendor/.\/vendor/g' index.php
sed -i 's/..\/bootstrap/.\/bootstrap/g' index.php

echo "=== Deploy Laravel ke shared hosting: SELESAI! ==="

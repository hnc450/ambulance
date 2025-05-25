cd /opt/lampp
sudo systemctl stop apache2
php -S localhost:8000 -t public && sudo ./manager-linux-x64.run 
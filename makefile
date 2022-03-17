
all:
	make html
	make upload
  
html:
	cd bdpm2022/ && sage /usr/bin/php2html . ../bdpm2022_html/ -o

upload:
	scp bdpm2022_html/*.* bu:/other/www/people/matschke/BigDataPureMath2022/
  

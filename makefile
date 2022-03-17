
all:
	make html
	make upload
  
html:
	cd src/ && sage /usr/bin/php2html . ../bdpm2022/ -o

upload:
	git add .
	git commit
	git push

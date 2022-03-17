
all:
	make html
	make upload
  
html:
	cd src/ && sage /usr/bin/php2html . ../ -o

upload:
	git add .
	git commit
	git push

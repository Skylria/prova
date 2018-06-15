dump:
	mysqldump -u root -p -d prova_web2 > db.dump

restore:
	mysql -u root -p -D prova_web2 < db.dump
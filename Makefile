dump:
	mysqldump -u root -p -d heads_up_db > db.dump

restore:
	mysql -u root -p -D heads_up_db < db.dump
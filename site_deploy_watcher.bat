:loop
 git add .
 git commit -am "New Site"
 git push origin master
timeout /t 5
goto loop
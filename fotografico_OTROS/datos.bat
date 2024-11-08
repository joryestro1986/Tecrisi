@echo off
set contador=9
for /R %%a in (*.jpeg,*.jpg) do (set rutarchiv=%%a&set nomarchivo=%%~na& set /a contador+=1& set extension=%%~xa&call :renombrar  )
pause
goto:eof
 
:renombrar
set profijo=%img:Pice_%
set nomarchiv=%nomarchiv:~0,10%
set nomarchivo=%contador:~0,10%
ren  "%rutarchiv%" "%profijo%"-"%nomarchivo%%extension%"
echo Renombrado "%rutarchiv%" - "%nomarchivo%%extension%"
goto:eof
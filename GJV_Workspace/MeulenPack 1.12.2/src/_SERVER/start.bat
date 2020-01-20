@echo off
echo Starting MeulenServer 1.12.2!
echo.
:loop
java -server -Xms1g -Xmx10g -jar forge-1.12.2-14.23.5.2847-universal.jar nogui
echo.
echo Server stopped or crashed, restarting in 10 seconds
TIMEOUT /T 10 /NOBREAK
goto loop
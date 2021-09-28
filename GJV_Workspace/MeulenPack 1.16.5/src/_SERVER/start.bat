@echo off
echo Starting MeulenServer 1.16.5!
echo.
:loop
java -server -Xms1g -Xmx10g -jar -Dfml.readTimeout=60 forge-1.16.5-36.2.0.jar nogui
echo.
echo Server stopped or crashed, restarting in 10 seconds
TIMEOUT /T 10 /NOBREAK
goto loop
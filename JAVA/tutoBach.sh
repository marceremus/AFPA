
@echo off

/* definir une variable */

set vie = 100
set name = "EREMUS"
set monPrenom = "Marc"
set perteDeVie = 10

echo "text"


:: passer à la ligne
echo. 

echo %name% et %monPrenom%

echo %vie%

:: operations  

set /a or=%vie%/10
echo %or%

:: demande à lutilisateur une valeur 
set /p nom=

echo %nom%

::  if 

if %nom% equ %monPrenom% echo Bonjour %monPrenom%
if %nom% neq echo Bonjur inconnu

:: equ => égal
:: neq => pas égal
:: lss => plus petit que 
:: leq => plus petit ou égal
:: gtr => plus grand
:: geq => plus grand ou égal

pause>null

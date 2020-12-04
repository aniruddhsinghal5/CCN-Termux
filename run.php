<?php
require "./cc.class.php";
echo("###############################################\n");
echo("#     Automatic Card Generator + CCN CHECKER       #\n");
echo("###############################################\n");
echo("# Created By : Aniruddh                          #\n");
echo("# Code : PHP                                  #\n");
echo("# Telegram - @aniruddhsinghal5          #\n");
echo("###############################################\n");
echo "[+] BIN : "; $bin = trim(fgets(STDIN));
echo "[+] Check Cards too? (1-Yes,0-No) : "; $check = trim(fgets(STDIN));
echo "[+] Number of cards to Check : "; $amount = trim(fgets(STDIN));
$new = new CC($bin, $check, $amount);
echo $new->Execute();

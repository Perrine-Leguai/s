<?php
    algo tab
    var tab(1:N) : tab d'entiers
        i,min,pos,temp, N : entier
    Pour i:= 1 à N- 1 faire
        min:= tab(i); pos:= i
        pour j:=i+1 à N-1 faire
            Si (tab(j)) < min) alors
            min:= tab (j); pos:= j;
            FinSi
        FinPour
            temp := tab(i)
            tab (i) :=  tab(pos)
            tab(pos) := temp
            FinSi
    FinPour
    Fin
Tri à bulles :
1. tab(i) < tab(i+1)
2. Flag
algo
var tab (1:n) entiers;
        n,i : entier
        YaPermute : booleen;
YaPermute := Vrai
debut
    Tantque (yapermute) faire
    yapermute:= Faux
    Pour i:=1 a n-1                 /*On parcour le tableau*/
        si (tab(i)< tab(i+1))       /*En comparant la valeur actuelle avec la suivante*/
            temp:= tab(i);          /*Si elle est plus petite, alors on permute*/
            tab(i):= tab(i+1);
            tab(i+1):= temp;
            yapermute:= vrai        /*Il y a eu permutation*/
        FinSi
    FinPour
Fin

?>
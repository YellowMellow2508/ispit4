# ispit4
1. (3) U IDE-u inicijalizirati PHP projekt s praznom početnom stranicom (koja koristi UTF kodiranje i
uključenom lokalnom kopijom jQuery-ja )u koju će se pisati sav PHP kod ostatka kolokvija. Za projekt
inicijalizirati git repozitorij i spremiti inicijalnu verziju projekta s opisom "Inicijalna verzija" i oznakom
(tag) "pocetak". Pripremiti konfiguraciju za prijenos podataka i rad na poslužitelju u vašem korisničkom
direktoriju "~korisnik/ispit4".
2. (7) Koristeći <div> i druge HTML5 elemente te pripadni CSS napraviti kod za web stranicu sa sljedećim
rasporedom područja: središnjim područjem gdje će se ispisivati rezultati, područje za izbornik sa desne
strane i poruke greške i statusa u dnu stranice. Izbornik neka ima stavke: Površina JS, Obavijest, Površina
PHP, Baza. Sva područja neka imaju vidljive okvire i različite boje pozadine i neka se skaliraju u prozoru
tako da desni pojas ostaje iste veličine dok ostali zauzimaju ostatak širine stranice. Prilikom otvaranja
animirati otvaranje središnjeg dijela prozora koristeći jQuery. U dnu stranice desno (status) ispisati trenutni
datum i sat.
3. (5) U datoteci JavaScript koda napisati funkciju povrsina koja za dva ulazna argumenta stranica
pravokutnika A i B vraća povrsinu pravokutnika.
4. (7) Na prethodnoj stranici u središnjem dijelu stranice na izbornik "povrsina JS" prikazati 2 ulazna polja
tipa klizač za unos stranica pravokutnika od 0-1000 mm i na bilo koju promjenu njihovog sadržaja u tekstu
sa strane klizača ispisuje odabranu vrijednost, a u trećem polju ispod klizača ispisuje vrijednost izračunatu
JavaScript funkcijom povrsina iz prethodnog zadatka.
5. (5) Za izrađeni HTML iz prethodnih zadataka dopisati jQuery kod koji pri kliku na neki element stranice
pod izbornikom "Obavijest" (naznačiti ga!) mijenja tekst elementa na "Ispit iz PA3", a pri zatvaranju
dokumenta podiže prozor upozorenja s porukom "Gotov ispit iz PA3" ?
6. (6) U datoteci projekta PHP koda funkcije.php napisati funkciju povrsina koja za dva ulazna
argumenta A i B vraća povrsinu pravokutnika. Prikazati formu za unos stranica pravokutnika na naredbu
"povrsina PHP". Na predaju podataka forme izračunati povrsinu korištenjem PHP funkcije i ispisati rezultat
na stranici ispod unosa.
7. (6) U modul funkcije.php dodati funkciju tablica($datum) koje iz baze PA3 na arwenu, tablice
pravokutnik pribavlja podatke za pojedinačne unose stranica i izračunate povrsina za zadani datum.
Funkcija neka generira sav potreban HTML kod za tablicu i vrati ga kao znakovni niz.
8. (6) Proširiti prethodni PHP kod s forme za pohranjivanje podataka pravokutnika u bazu (npr. "Spremi
izračunato") novog zapisa povrsine pravokutnike nakon izračuna. Stranica treba izračunati povrsinu i
pohraniti podatke u bazu na submit i vratiti se na prikaz tablice za današnji dan.
Prije predaje spremiti i označiti konačni kod u git repozitoriju s oznakom "predano" i predati u arhivi cijeli
direktorij projekta na moodle u za to predviđeno mjesto.

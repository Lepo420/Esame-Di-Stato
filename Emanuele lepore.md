

**I.I.S. Guglielmo Marconi di**

**Civitavecchia**

**Specializzazione: Informatica**

**Emanuele Lepore**

**Prova d’esame: Informatica - Sistemi e reti -**

**Gestione - TPSI**

**Professori:**

**Claudio Capobianco (Sistemi)**

**Massimiliano Valenti (T.P.S.I)**

**Alberto Marone (Informatica)**

**Ilaria Lauro (Gestione di impresa)**

**Anno scolastico: 2020-2021**





2





***Analisi dei requisiti***

Il supermercato Marconi Go decide di creare

un'infrastruttura in grado di gestire le attività di

vendita ed amministrazione, il controllo del clima,

dei frigoriferi e la gestione di infografica e prezzi

sugli scaffali. Inoltre si richiede che su tutto il

supermercato si vuole rendere disponibile una rete

wifi a cui i clienti con la tessera possono accedere,

e che il servizio offerto on-line tramite sito web

garantisca un traffico dati efficiente per un numero

elevato di utenti. Il servizio deve garantire anche

un elevato livello di sicurezza per permettere una

navigazione sicura dell’utente all’interno del sito

web.

3





**Ipotesi aggiuntive**

L’edificio è di nuova costruzione.

Si tratta di supermercato di medie dimensioni.

Sono state richieste 4 postazioni per gli

amministratori di rete ed inoltre il magazzino

con 2 postazioni di lavoro. I cavi saranno

posizionati all'interno di una controsoffittatura

posta sul soffitto del supermercato. La rete che

si andrà ad utilizzare sarà composta da due

sottoreti, una per il supermercato e l’altra per il

magazzino. Gli indirizzi saranno in classe A,

ipotizzando che le persone che andranno a

connettersi all’interno del supermercato siano di

elevato numero. (IPV4: 10.x.x.x subnet

255.255.255.0 ). Il sito web avrà il protocollo

HTTPS con certificato SSL Let’s encrypt, che ha

lo scopo di fornire autenticazione del sito web e

del server web e del server web associato con

cui una delle parti sta comunicando,

proteggendo la comunicazione dagli attacchi

noti tramite la tecnica del man in the middle.

Inoltre si ipotizza che il sito web sarà disponibile

solo in Italia e deve garantire un’ottima velocità

4





per centinaia di migliaia di accessi tutti nello

stesso momento. L’architettura di sistema sarà

4-tiers. Per quanto riguarda i tipi di firewall si

opta per un WAF (Web application firewall ) per

la protezione del sito web e per quanto riguarda

la protezione della rete si utilizza un firewall

perimetrale di tipo “Stateful inspection” perché

tiene traccia di alcune relazioni tra i pacchetti

che lo attraversano, ad esempio ricostruisce lo

stato delle connessioni TCP, permettendo ad

esempio di riconoscere pacchetti TCP malevoli

che non fanno parte di alcuna connessione. La

soluzione da applicare sarà ibrida con un server

fisico e uno in cloud per la gestione del sito

web.

5





**Planimetria “Marconi Go”**

6





**Legenda**

7





**Campus Distributor**

CD è il Campus Distributor , cioè distributore di

insediamento , dove si concentrano le

apparecchiature di distribuzione di tutto

l’impianto.

**Building Distributor**

BD è il Building Distributor , cioè distributore di

edificio , dove si concentrano le apparecchiature

di distribuzione del singolo edificio

**Floor Distributor**

E’ il **Floor Distributor** , cioè il distributore di piano.

**Presa T.O.**

E’ la presa utente

8





**Dettagli edificio**

Il supermercato sarà formato dal supermercato ed il

magazzino dislocati in 2 edifici differenti. Nel

supermercato sarà presente un BD/FD collegato ad

un CD, nel magazzino invece ci sarà solamente un

BD/FD. La rappresentazione degli edifici è mostrata in

figura sul piano verticale.

9





**“Struttura dell’edificio”**

10





**Albero degli apparati passivi**

11





**Albero degli apparati attivi**

12





**Schema degli armadi**

13





**Subnetting Definizione**

In informatica una sottorete, o subnet, è la parte della

suddivisione di una singola rete IP (Internet Protocol).

Tale suddivisione è realmente visibile solo dalla parte

logica della rete, ciò vuol dire che la differenza tra una

rete e una sottorete sta nel tipo di configurazione di

rete che si dà al proprio computer. Il processo di

subnetting è la divisione di una singola rete in gruppi

di computer che hanno in comune in ciascun indirizzo

IP un determinato prefisso di routing.

**Subnetting**

Vengono utilizzati indirizzi di classe A (10.0.0.0). Il

subnetting effettuato sarà di tipo Classful. La scelta

della classe A è stata fatta per avere più indirizzi a

disposizione anche per usi futuri.





**Scelta dei cavi**

Il supermercato in questione non ha dichiarato la

scelta dei cavi da utilizzare, perciò si ritiene opportuno

utilizzare dei cavi UTP CAT.8A (Standard EIA/TIA)

poiché hanno una frequenza di 2 GHz con una

velocità di connessione fino a 40 GB/s. Ha una

lunghezza di 30 metri. I cavi passeranno in una

controsoffittatura.

**Cavo UTP**

UTP è l'acronimo di Unshielded Twisted Pair e

identifica un [cavo](https://it.wikipedia.org/wiki/Cavo_elettrico)[ ](https://it.wikipedia.org/wiki/Cavo_elettrico)non [schermato](https://it.wikipedia.org/wiki/Schermatura_elettronica)[ ](https://it.wikipedia.org/wiki/Schermatura_elettronica)utilizzato comunemente

per il collegamento nelle reti [ethernet](https://it.wikipedia.org/wiki/Ethernet). È composto da otto

fili di rame intrecciati a coppie (*pairs*). Ciascuna coppia è

intrecciata con un passo diverso, e ogni coppia è intrecciata

con le altre. L'intreccio dei fili ha lo scopo di ridurre le

interferenze, i disturbi e limitare il crosstalk. La lunghezza

massima di un cavo UTP nello standard ethernet è di 100

m. I cavi UTP seguono le specifiche standardizzate

in TIA/EIA che li dividono in varie categorie in base ad





esempio al numero di intrecci e alle capacità di trasportare

segnali. Attualmente la categoria 5 e la 5e sono le più

utilizzate, esiste tuttavia anche la categoria 6 che permette

di raggiungere velocità superiori a parità di lunghezza

massima. Le categorie vanno da 1 a 7. Un cavo UTP

termina con dei connettori di tipo 8P8C che si innestano

direttamente nell'interfaccia del dispositivo (scheda di rete,

Hub, Switch, Router, ecc). I cavi diritti presentano gli 8 fili

nello stesso ordine in entrambi i 2 connettori, mentre quelli

cross presentano una sequenza diversa, e vengono usati

per collegare tra loro due host ethernet. Nella costruzione

del cavo, ovvero nel crimpare i connettori alle sue

estremità si possono seguire due standard: TIA/EIA 568A e

TIA/EIA 568B che presentano un ordine degli 8 fili

(identificati da diversi colori) diverso.





**Tabella dei cavi**

17





**Cosa comprare**

Victure Telecamera WiFi Esterno FHD 1080P Telecamera IP con

Vista Panoramica/Inclinazione a 360° Visione Notturna

Impermeabile IP66 Rilevamento del Movimento Compatibile con iOS

/Android

[https://www.amazon.it/Victure-Inclinazione-Impermeabile-Rileva](https://www.amazon.it/Victure-Inclinazione-Impermeabile-Rilevamento-Compatibile/dp/B08DHVBB7C)

[mento-Compatibile/dp/B08DHVBB7C](https://www.amazon.it/Victure-Inclinazione-Impermeabile-Rilevamento-Compatibile/dp/B08DHVBB7C)

PREZZO: 69,99 € (69,99 \* 7 = 489,93 € )

LEDVANCE Pannello luminoso LED intelligente con

tecnologia WiFi per interni, colore della luce

modificabile (3000-6500K), colori RGB modificabili, 120

mm x 300 mm, SMART+ PLANON PLUS MULTICOLOR

[Classe di efficienza energetica A++]

[https://www.amazon.it/LEDVANCE-intelligente-SMART-PL](https://www.amazon.it/LEDVANCE-intelligente-SMART-PLANON-PLUS/dp/B08SC5TV3G/)

[ANON-PLUS/dp/B08SC5TV3G/](https://www.amazon.it/LEDVANCE-intelligente-SMART-PLANON-PLUS/dp/B08SC5TV3G/)

PREZZO: 129,99 € ( 129,99 \* 6 = 779,94 € )

18





Plafoniera LED Compatibile Amazon Alexa Google Home

Con Bluetooth Altoparlante Telecomando Luce

Regolabile Cambia Colore RGB Lampada Da Soffitto WIFI

Intelligente Per Camera Da LettoLetto [Classe di

efficienza energetica A++]

[https://www.amazon.it/Plafoniera-Compatibile-Altoparlante-Tel](https://www.amazon.it/Plafoniera-Compatibile-Altoparlante-Telecomando-Intelligente/dp/B08KYJ4LLZ/)

[ecomando-Intelligente/dp/B08KYJ4LLZ/](https://www.amazon.it/Plafoniera-Compatibile-Altoparlante-Telecomando-Intelligente/dp/B08KYJ4LLZ/)

PREZZO: 88 €

(Scheda di sviluppo D1 Mini NodeMCU Lua IOT 3.3V con

i perni D1 Mini ESP8266 ESP-12 ESP-12F CH340G V2 USB

WeMos D1 Mini WIFI

<https://it.aliexpress.com/item/1005001621784437.html>

PREZZO: 3,89 €

ZigBee Mini Sensore SONOFF SNZB-02 interno di

temperatura e umidità per il controllo del clima della

stanza,SONOFF ZigBee Bridge richiesto, Termometro interno

igrometro con avviso, Alexa e Google Home

[**https://www.amazon.it/SNZB-02-temperatura-controllo-richie**](https://www.amazon.it/SNZB-02-temperatura-controllo-richiesto-Termometro/dp/B08BFW697F/)

[**sto-Termometro/dp/B08BFW697F/**](https://www.amazon.it/SNZB-02-temperatura-controllo-richiesto-Termometro/dp/B08BFW697F/)

PREZZO: 17,99 € (17,99\*2 = 35,98 €)

19





MQ-2 MQ-3 MQ-4 MQ-5 MQ-6 MQ-7 MQ-8 MQ-9 MQ-135 di

Rilevamento di Fumo metano liquefatto Modulo Sensore di

Gas per Arduino Starter FAI DA TE kit

<https://it.aliexpress.com/item/4000587261511.html>

PREZZO: 8,59 €

GY-BME280-3.3 precisione altimetro modulo di pressione

atmosferica BME280 modulo sensore 3.3V

<https://it.aliexpress.com/item/33052320902.html>

PREZZO: 8,59 €)

Multisensore Fumo, Umidità, Temperatura e Pressione.

Per la creazione

[https://hassiohelp.eu/2021/01/16/multisensore-fumo-temperatura-](https://hassiohelp.eu/2021/01/16/multisensore-fumo-temperatura-umidita-pressione/)

[umidita-pressione/](https://hassiohelp.eu/2021/01/16/multisensore-fumo-temperatura-umidita-pressione/)

20





Wifi senza fili supermercato scaffale elettronico etichetta

cartellino del prezzo eink display lcd

[https://italian.alibaba.com/product-detail/wifi-wireless-supermarket-e](https://italian.alibaba.com/product-detail/wifi-wireless-supermarket-electronic-shelf-label-eink-price-tag-lcd-display-60604400143.html)

[lectronic-shelf-label-eink-price-tag-lcd-display-60604400143.html](https://italian.alibaba.com/product-detail/wifi-wireless-supermarket-electronic-shelf-label-eink-price-tag-lcd-display-60604400143.html)

PREZZO: 15 € ( 15\*12 = 180 € )

2pcs Sensore di apertura porte e finestre, intelligente

rivelatore di sensori magnetici per porte e finestre funziona

con Alexa Google Home IFTTT, sensore di porta aperta

wireles, tuya APP

[https://www.amazon.it/apertura-intelligente-rivelatore-magnetici-c](https://www.amazon.it/apertura-intelligente-rivelatore-magnetici-controllo/dp/B07XFBJ7QR)

[ontrollo/dp/B07XFBJ7QR](https://www.amazon.it/apertura-intelligente-rivelatore-magnetici-controllo/dp/B07XFBJ7QR)

PREZZO: 35,99 €

Nuovo Echo Dot (4ª generazione) - Altoparlante intelligente

con Alexa - Con controlli per la privacy - Antracite

[https://www.amazon.it/nuovo-echo-dot-4a-generazione-altoparlant](https://www.amazon.it/nuovo-echo-dot-4a-generazione-altoparlante-intelligente-con-alexa-antracite/dp/B084DWG2VQ/)

[e-intelligente-con-alexa-antracite/dp/B084DWG2VQ/](https://www.amazon.it/nuovo-echo-dot-4a-generazione-altoparlante-intelligente-con-alexa-antracite/dp/B084DWG2VQ/)

PREZZO: 44,99 € (44,99 \* 2 = 89,98 € )

21





HP - JG934A - HP 5130-48G-4SFP+ EI Switch (+pp)

[https://www.tonitrus.com/it/networking/hp/switch/hpe-flexnetwork-](https://www.tonitrus.com/it/networking/hp/switch/hpe-flexnetwork-5130-ei-switch/10111961-003-hp-jg934a-hp-5130-48g-4sfp-ei-switch/)

[5130-ei-switch/10111961-003-hp-jg934a-hp-5130-48g-4sfp-ei-switch/](https://www.tonitrus.com/it/networking/hp/switch/hpe-flexnetwork-5130-ei-switch/10111961-003-hp-jg934a-hp-5130-48g-4sfp-ei-switch/)

PREZZO: 705,50 € ( 705,50 \* 3 = 2.116,50 € )

Cisco RV340W router wireless Dual-band (2.4 GHz/5 GHz)

Gigabit Ethernet Nero - RV340W-E-K9-G5

[https://www.tekworld.it/router-wireless/51061-cisco-rv340w-router](https://www.tekworld.it/router-wireless/51061-cisco-rv340w-router-wireless-dual-band-24-ghz-5-ghz-gigabit-ethernet-nero-rv340w-e-k9-g5-0882658864834.html)

[-wireless-dual-band-24-ghz-5-ghz-gigabit-ethernet-nero-rv340w-e-k](https://www.tekworld.it/router-wireless/51061-cisco-rv340w-router-wireless-dual-band-24-ghz-5-ghz-gigabit-ethernet-nero-rv340w-e-k9-g5-0882658864834.html)

[9-g5-0882658864834.html](https://www.tekworld.it/router-wireless/51061-cisco-rv340w-router-wireless-dual-band-24-ghz-5-ghz-gigabit-ethernet-nero-rv340w-e-k9-g5-0882658864834.html)

PREZZO: 392,41 € (392,41 \* 2 = 784,82 €)

HB-DIGITAL 25m Cat. 8 cavo di rete cavo di posa cavo di

installazione B2Ca cavo dati indoor-∅ 0,6 mm cavo Ethernet

LAN Cat 8 fino a 40 Gbit/s rame S/FTP 2000 MHz PIMF

LSZH senza alogeni AW G 22/1 blu

[https://www.amazon.it/HB-DIGITAL-installazione-indoor-%E2%88](https://www.amazon.it/HB-DIGITAL-installazione-indoor-%E2%88%85-Ethernet-alogeni/dp/B08QD9HTDC)

[%85-Ethernet-alogeni/dp/B08QD9HTDC](https://www.amazon.it/HB-DIGITAL-installazione-indoor-%E2%88%85-Ethernet-alogeni/dp/B08QD9HTDC)

PREZZO: 5,16 € al metro (500 \* 5,16 = 2.595 €)

22





Access Point

[https://www.tonitrus.com/it/networking/cisco/access-point-contro](https://www.tonitrus.com/it/networking/cisco/access-point-controller/cisco-3800-access-point/10116471-003-cisco-air-ap3802i-e-k9-802.11ac-w2-ap-w/ca-4x43-mod-int-ant-mgig-e-domain/)

[ller/cisco-3800-access-point/10116471-003-cisco-air-ap3802i-e-k9-80](https://www.tonitrus.com/it/networking/cisco/access-point-controller/cisco-3800-access-point/10116471-003-cisco-air-ap3802i-e-k9-802.11ac-w2-ap-w/ca-4x43-mod-int-ant-mgig-e-domain/)

[2.11ac-w2-ap-w/ca-4x43-mod-int-ant-mgig-e-domain/](https://www.tonitrus.com/it/networking/cisco/access-point-controller/cisco-3800-access-point/10116471-003-cisco-air-ap3802i-e-k9-802.11ac-w2-ap-w/ca-4x43-mod-int-ant-mgig-e-domain/)

PREZZO: 518,50 € ( 518,50 \* 2 = 1.037 € )

UPS (Batteria)

<https://www.senetic.it/product/SMC1500IC>

PREZZO: 591,88 € (591,88 \* 3 = 1.775,64 € )

Armadio Rack a Parete 19" 4-Montante con Porta Anteriore

Ventilata, Posteriore Incernierata della Serie 19" 4-12U

GV600

<https://www.fs.com/it/products/73984.html>

PREZZO: 368,44 € (368,44 \* 3 = 1.105,32 €)

Pc (building )

<https://prnt.sc/12n1f3j>

PREZZO: 1.411,18 (1.411,18 \* 6 = 8.467,08)

23





LG 34GN850 UltraGear Gaming Monitor 34" QuadHD

UltraWide Curvo 21:9 LED NanoIPS 1ms HDR 400,

3440x1440, G-Sync Compatible e AMD FreeSync Premium

160Hz, HDMI, Display Port, USB Hub, Flicker Safe, Nero

[https://www.amazon.it/LG-34GN850-UltraGear-Monitor-UltraWide](https://www.amazon.it/LG-34GN850-UltraGear-Monitor-UltraWide/dp/B0864GCQPL)

[/dp/B0864GCQPL](https://www.amazon.it/LG-34GN850-UltraGear-Monitor-UltraWide/dp/B0864GCQPL)

PREZZO: 1.149,00 € ( 1.149,00 \* 6 = 6.894 €)

Cassetto ottico

[https://www.manhattanshop.it/armadio-rack-19-a-muro-6u-prof-32](https://www.manhattanshop.it/armadio-rack-19-a-muro-6u-prof-320-nero-assemblato.html)

[0-nero-assemblato.html](https://www.manhattanshop.it/armadio-rack-19-a-muro-6u-prof-320-nero-assemblato.html)

PREZZO: 60 €

24





Razer Basilisk Ultimate Mouse da Gaming Senza Fili, Dotato

di 11 Pulsanti Programmabili con Iluminazione Razer

Chroma, Resistenza della Rotella di Scorrimento Regolabile,

con Charging Dock, Nero

[https://www.amazon.it/Razer-Basilisk-Ultimate-Alimentato-Progra](https://www.amazon.it/Razer-Basilisk-Ultimate-Alimentato-Programmabili/dp/B07Y8SF6ZY/)

[mmabili/dp/B07Y8SF6ZY/](https://www.amazon.it/Razer-Basilisk-Ultimate-Alimentato-Programmabili/dp/B07Y8SF6ZY/)

PREZZO: 163,40 € ( 163,40 \* 6 = 980,40 €)

Razer Huntsman - Tastiera Premium con tasti Opto-Meccanici

Razer (Attuazione Ottica, Barra Stabilizzatrice dei Tasti, Razer

Synapse 3), Italiano Layout, Nero

[https://www.amazon.it/Razer-Huntsman-Tastiera-Opto-Meccanici-S](https://www.amazon.it/Razer-Huntsman-Tastiera-Opto-Meccanici-Stabilizzatrice/dp/B07DDX6S9D/)

[tabilizzatrice/dp/B07DDX6S9D/](https://www.amazon.it/Razer-Huntsman-Tastiera-Opto-Meccanici-Stabilizzatrice/dp/B07DDX6S9D/)

PREZZO: 175,99 € ( 175,99 \* 6 = 1.055,94 €)

**Prezzo totale: 27.555,59 €**

25





**Protocolli, servizi di rete e di sistema**

**Protocollo TCP**

Il TCP può essere classificato al [livello](https://it.wikipedia.org/wiki/Livello_di_trasporto)[ ](https://it.wikipedia.org/wiki/Livello_di_trasporto)[trasporto](https://it.wikipedia.org/wiki/Livello_di_trasporto)[ ](https://it.wikipedia.org/wiki/Livello_di_trasporto)(level 4) del [modello](https://it.wikipedia.org/wiki/Modello_di_riferimento_OSI)[ ](https://it.wikipedia.org/wiki/Modello_di_riferimento_OSI)[di](https://it.wikipedia.org/wiki/Modello_di_riferimento_OSI)

[riferimento](https://it.wikipedia.org/wiki/Modello_di_riferimento_OSI)[ ](https://it.wikipedia.org/wiki/Modello_di_riferimento_OSI)[OSI](https://it.wikipedia.org/wiki/Modello_di_riferimento_OSI), e di solito è usato in combinazione con il protocollo di [livello](https://it.wikipedia.org/wiki/Livello_di_rete)

[rete](https://it.wikipedia.org/wiki/Livello_di_rete)[ ](https://it.wikipedia.org/wiki/Livello_di_rete)(OSI level

\3) [IP](https://it.wikipedia.org/wiki/Internet_Protocol). Nel [modello](https://it.wikipedia.org/wiki/Suite_di_protocolli_Internet)[ ](https://it.wikipedia.org/wiki/Suite_di_protocolli_Internet)[TCP/IP](https://it.wikipedia.org/wiki/Suite_di_protocolli_Internet)[ ](https://it.wikipedia.org/wiki/Suite_di_protocolli_Internet)il protocollo TCP occupa il livello 4, trasporto. In

linea con i dettami del livello di trasporto stabiliti dal [modello](https://it.wikipedia.org/wiki/Modello_ISO/OSI)[ ](https://it.wikipedia.org/wiki/Modello_ISO/OSI)[ISO/OSI](https://it.wikipedia.org/wiki/Modello_ISO/OSI)[ ](https://it.wikipedia.org/wiki/Modello_ISO/OSI)e con

l'intento di superare il problema della mancanza di affidabilità e controllo della

comunicazione sorto con l'interconnessione su vasta scala di [reti](https://it.wikipedia.org/wiki/Rete_locale)[ ](https://it.wikipedia.org/wiki/Rete_locale)[locali](https://it.wikipedia.org/wiki/Rete_locale)[ ](https://it.wikipedia.org/wiki/Rete_locale)in

un'unica grande [rete](https://it.wikipedia.org/wiki/Wide_Area_Network)[ ](https://it.wikipedia.org/wiki/Wide_Area_Network)[geografica](https://it.wikipedia.org/wiki/Wide_Area_Network), TCP è stato progettato e realizzato per

utilizzare i servizi offerti dai protocolli di rete di livello inferiore ([IP](https://it.wikipedia.org/wiki/Internet_Protocol)[ ](https://it.wikipedia.org/wiki/Internet_Protocol)e protocolli

di [livello](https://it.wikipedia.org/wiki/Livello_fisico)[ ](https://it.wikipedia.org/wiki/Livello_fisico)[fisico](https://it.wikipedia.org/wiki/Livello_fisico)[ ](https://it.wikipedia.org/wiki/Livello_fisico)e [livello](https://it.wikipedia.org/wiki/Livello_datalink)[ ](https://it.wikipedia.org/wiki/Livello_datalink)[datalink](https://it.wikipedia.org/wiki/Livello_datalink)) che definiscono efficacemente il [modo](https://it.wikipedia.org/wiki/Modo_di_trasferimento)[ ](https://it.wikipedia.org/wiki/Modo_di_trasferimento)[di](https://it.wikipedia.org/wiki/Modo_di_trasferimento)

[trasferimento](https://it.wikipedia.org/wiki/Modo_di_trasferimento)[ ](https://it.wikipedia.org/wiki/Modo_di_trasferimento)sul [canale](https://it.wikipedia.org/wiki/Canale_\(telecomunicazioni\))[ ](https://it.wikipedia.org/wiki/Canale_\(telecomunicazioni\))di comunicazione, ma che non offrono alcuna

garanzia di affidabilità sulla consegna in termini di ritardo, perdita ed [errore](https://it.wikipedia.org/wiki/Controllo_di_errore)

dei [pacchetti](https://it.wikipedia.org/wiki/Pacchetto_\(reti\))[ ](https://it.wikipedia.org/wiki/Pacchetto_\(reti\))informativi trasmessi, sul [controllo](https://it.wikipedia.org/wiki/Controllo_di_flusso)[ ](https://it.wikipedia.org/wiki/Controllo_di_flusso)[di](https://it.wikipedia.org/wiki/Controllo_di_flusso)[ ](https://it.wikipedia.org/wiki/Controllo_di_flusso)[flusso](https://it.wikipedia.org/wiki/Controllo_di_flusso)[ ](https://it.wikipedia.org/wiki/Controllo_di_flusso)tra terminali e sul

[controllo](https://it.wikipedia.org/wiki/Controllo_della_congestione)[ ](https://it.wikipedia.org/wiki/Controllo_della_congestione)[della](https://it.wikipedia.org/wiki/Controllo_della_congestione)[ ](https://it.wikipedia.org/wiki/Controllo_della_congestione)[congestione](https://it.wikipedia.org/wiki/Controllo_della_congestione)[ ](https://it.wikipedia.org/wiki/Controllo_della_congestione)di rete, supplendo quindi ai problemi di cui sopra e

costruendo così un affidabile [canale](https://it.wikipedia.org/wiki/Canale_\(telecomunicazioni\))[ ](https://it.wikipedia.org/wiki/Canale_\(telecomunicazioni\))[di](https://it.wikipedia.org/wiki/Canale_\(telecomunicazioni\))[ ](https://it.wikipedia.org/wiki/Canale_\(telecomunicazioni\))[comunicazione](https://it.wikipedia.org/wiki/Canale_\(telecomunicazioni\))[ ](https://it.wikipedia.org/wiki/Canale_\(telecomunicazioni\))tra due [processi](https://it.wikipedia.org/wiki/Processo_\(informatica\))

applicativi di rete. Il canale di comunicazione così costruito è composto da un

flusso bidirezionale di [byte](https://it.wikipedia.org/wiki/Byte)[ ](https://it.wikipedia.org/wiki/Byte)a seguito dell'instaurazione di una [connessione](https://it.wikipedia.org/wiki/Connessione_\(informatica\))

agli estremi tra i due terminali in comunicazione. Inoltre alcune funzionalità di

TCP sono vitali per il buon funzionamento complessivo di una rete IP. Sotto

questo punto di vista TCP può essere considerato come un protocollo di rete

che si occupa di costruire connessioni e garantire affidabilità su una rete IP

sottostante che è sostanzialmente di tipo [best-effort](https://it.wikipedia.org/wiki/Best_effort). Il TCP nacque nel [1970](https://it.wikipedia.org/wiki/1970)

come frutto del lavoro di un gruppo di ricerca del [Dipartimento](https://it.wikipedia.org/wiki/Dipartimento_della_Difesa_statunitense)[ ](https://it.wikipedia.org/wiki/Dipartimento_della_Difesa_statunitense)[della](https://it.wikipedia.org/wiki/Dipartimento_della_Difesa_statunitense)[ ](https://it.wikipedia.org/wiki/Dipartimento_della_Difesa_statunitense)[Difesa](https://it.wikipedia.org/wiki/Dipartimento_della_Difesa_statunitense)

[statunitense](https://it.wikipedia.org/wiki/Dipartimento_della_Difesa_statunitense). I suoi punti di forza sono l'alta affidabilità e robustezza. La sua

popolarità si deve anche grazie ad una sua implementazione diffusa dalla

[Università](https://it.wikipedia.org/wiki/Universit%C3%A0_della_California%2C_Berkeley)[ ](https://it.wikipedia.org/wiki/Universit%C3%A0_della_California%2C_Berkeley)[di](https://it.wikipedia.org/wiki/Universit%C3%A0_della_California%2C_Berkeley)[ ](https://it.wikipedia.org/wiki/Universit%C3%A0_della_California%2C_Berkeley)[Berkeley](https://it.wikipedia.org/wiki/Universit%C3%A0_della_California%2C_Berkeley), rilasciata in California sotto forma di sorgenti (TCP

Berkeley). Molte tuttavia sono le implementazioni e sviluppi che si sono

succeduti nel tempo come evoluzioni e miglioramenti (es. TCP Tahoe, TCP

Reno, TCP New Reno).

26





**Protocollo HTTPS**

Nel suo popolare funzionamento su Internet, HTTPS

fornisce l'autenticazione del sito web e del [server](https://it.wikipedia.org/wiki/Server_web)[ ](https://it.wikipedia.org/wiki/Server_web)[web](https://it.wikipedia.org/wiki/Server_web)

associato con cui una delle parti sta comunicando,

proteggendo la comunicazione dagli attacchi noti tramite la

tecnica del [man](https://it.wikipedia.org/wiki/Man_in_the_middle)[ ](https://it.wikipedia.org/wiki/Man_in_the_middle)[in](https://it.wikipedia.org/wiki/Man_in_the_middle)[ ](https://it.wikipedia.org/wiki/Man_in_the_middle)[the](https://it.wikipedia.org/wiki/Man_in_the_middle)[ ](https://it.wikipedia.org/wiki/Man_in_the_middle)[middle](https://it.wikipedia.org/wiki/Man_in_the_middle). Inoltre, HTTPS fornisce una

cifratura bidirezionale delle comunicazioni tra un [client](https://it.wikipedia.org/wiki/Client)[ ](https://it.wikipedia.org/wiki/Client)e un

[server](https://it.wikipedia.org/wiki/Server), che protegge la stessa contro le possibili operazioni

di [eavesdropping](https://it.wikipedia.org/wiki/Eavesdropping), (azione mediante il quale viene ascoltata

segretamente la conversazione privata tra le parti senza il

loro consenso) e [tampering](https://it.wikipedia.org/w/index.php?title=Tampering_\(sicurezza_informatica\)&action=edit&redlink=1)[ ](https://it.wikipedia.org/w/index.php?title=Tampering_\(sicurezza_informatica\)&action=edit&redlink=1)(letteralmente manomissione o

alterazione della comunicazione) falsificandone i contenuti.

In pratica, tale meccanismo fornisce una garanzia

soddisfacente del fatto che si sta comunicando esattamente

con il sito web voluto (al contrario di un sito falso), oltre a

garantire che i contenuti delle comunicazioni tra l'utente e il

sito web non possano essere intercettate o alterate da terzi.

Storicamente, le connessioni HTTPS erano usate

soprattutto per i pagamenti nelle transazioni sul [World](https://it.wikipedia.org/wiki/World_Wide_Web)[ ](https://it.wikipedia.org/wiki/World_Wide_Web)[Wide](https://it.wikipedia.org/wiki/World_Wide_Web)

[Web](https://it.wikipedia.org/wiki/World_Wide_Web), [e-mail](https://it.wikipedia.org/wiki/Posta_elettronica)[ ](https://it.wikipedia.org/wiki/Posta_elettronica)e per le transazioni sensibili all'interno dei

[sistemi](https://it.wikipedia.org/wiki/Sistema_informativo)[ ](https://it.wikipedia.org/wiki/Sistema_informativo)[informativi](https://it.wikipedia.org/wiki/Sistema_informativo)[ ](https://it.wikipedia.org/wiki/Sistema_informativo)aziendali. Nel tardo 2000 e nei primi anni

del 2010, HTTPS ha iniziato ad avere una larga diffusione e

ampio utilizzo per proteggere l'autenticità delle [pagine](https://it.wikipedia.org/wiki/Pagina_web)[ ](https://it.wikipedia.org/wiki/Pagina_web)[web](https://it.wikipedia.org/wiki/Pagina_web),

la sicurezza degli account utente e per mantenere private le

comunicazioni, l'identità e la navigazione web dell'utente.

27





**Firewall**

Un firewall è uno strumento, hardware o software, che

funge da schermo protettivo, un vero e proprio muro

(da qui il nome) che garantisce protezione alla rete

informatica**.** Il firewall, in particolare, blocca l’accesso

al sistema alle risorse esterne, applicando filtri di

protezione che agiscono secondo determinate regole,

a loro volta definite dall’amministratore della rete. I

firewall in realtà possono controllare sia traffico

proveniente dalla rete esterna sia il flusso di dati

generati all’interno, consentendo il passaggio

solamente a ciò che viene esplicitamente autorizzato.

In sostanza, è possibile connettere due o più reti (o

sottoreti) definendo le regole per l’intercomunicazione

tra esse.

28





**Scelta dei linguaggi**

Per la realizzazione del sito web saranno utilizzati i

linguaggi HTML, CSS e PHP per il collegamento

client-server. Per il database si richiede l’utilizzo di

MYSQL.

**HTML**

Il linguaggio HTML è il linguaggio utilizzato per la costruzione di

pagine internet.

**HTML** è l’acronimo inglese di “Hyper Text Markup Language”: questa

espressione inglese può essere tradotta come “Linguaggio a marcatori

per ipertesti”. Non spaventarti se questa definizione ti appare troppo

difficile in questo momento.

In attesa di capire gradualmente cosa essa significhi, cominciamo con

il dire che l’HTML è il linguaggio che serve a creare e dare uno stile

alle pagine internet; queste pagine, come sai, sono complesse, perché

hanno al loro interno testi, immagini, suoni, video, link, effetti visivi di

vario tipo. Per questo motivo, una pagina internet viene definita come

un **ipertesto**, e cioè un **testo che contiene al suo interno più tipi di**

**contenuti**. Quindi, anche se non lo sappiamo, il linguaggio HTML fa

ormai parte della nostra vita di tutti i giorni: ogni volta che apriamo una

pagina internet (sia con il computer di casa, con il tablet o con lo

smartphone) entra in gioco il linguaggio HTML.

29





**CSS**

Il CSS (sigla di Cascading Style Sheets, in italiano fogli di stile a

cascata),

in [informatica](https://it.wikipedia.org/wiki/Informatica), è un linguaggio usato per definire la

[formattazione](https://it.wikipedia.org/wiki/Formattazione_del_testo)[ ](https://it.wikipedia.org/wiki/Formattazione_del_testo)di documenti [HTML](https://it.wikipedia.org/wiki/HTML), [XHTML](https://it.wikipedia.org/wiki/XHTML)[ ](https://it.wikipedia.org/wiki/XHTML)e [XML](https://it.wikipedia.org/wiki/XML), ad esempio i [siti](https://it.wikipedia.org/wiki/Sito_web)

[web](https://it.wikipedia.org/wiki/Sito_web)[ ](https://it.wikipedia.org/wiki/Sito_web)e relative [pagine](https://it.wikipedia.org/wiki/Pagina_web)[ ](https://it.wikipedia.org/wiki/Pagina_web)[web](https://it.wikipedia.org/wiki/Pagina_web). Le regole per comporre il CSS sono

contenute in un insieme di direttive (Recommendations) emanate a

partire dal [1996](https://it.wikipedia.org/wiki/1996)[ ](https://it.wikipedia.org/wiki/1996)dal [W3C](https://it.wikipedia.org/wiki/World_Wide_Web_Consortium). L'introduzione del CSS si è resa

necessaria per separare i contenuti delle pagine

HTML dalla

loro formattazione o [layout](https://it.wikipedia.org/wiki/Layout)[ ](https://it.wikipedia.org/wiki/Layout)e permettere una [programmazione](https://it.wikipedia.org/wiki/Programmazione_\(informatica\))

più chiara e facile da utilizzare, sia per gli autori delle pagine stesse

sia per gli utenti, garantendo contemporaneamente anche il

[riutilizzo](https://it.wikipedia.org/wiki/Riuso_di_codice)[ ](https://it.wikipedia.org/wiki/Riuso_di_codice)[di](https://it.wikipedia.org/wiki/Riuso_di_codice)[ ](https://it.wikipedia.org/wiki/Riuso_di_codice)[codice](https://it.wikipedia.org/wiki/Riuso_di_codice)[ ](https://it.wikipedia.org/wiki/Riuso_di_codice)ed una sua più facile manutenzione.

**PHP**

PHP (acronimo ricorsivo di "PHP: Hypertext Preprocessor",

preprocessore di ipertesti; originariamente acronimo di "Personal

Home Page") è un linguaggio di scripting interpretato, originariamente

concepito per la programmazione di pagine web dinamiche.

L'interprete PHP è un software libero distribuito sotto la PHP License.

Attualmente è principalmente utilizzato per sviluppare applicazioni

web lato server, ma può essere usato anche per scrivere script a riga

di comando o applicazioni stand- alone con interfaccia grafica.

30





**Database MYSQL**

MySQL o Oracle MySQL [(/maɪ](https://it.wikipedia.org/wiki/Relational_database_management_system)[ ](https://it.wikipedia.org/wiki/Relational_database_management_system)[ˌɛskju](https://it.wikipedia.org/wiki/Relational_database_management_system)ːˈɛl/ "My S-Q-L") è un

[*relational*](https://it.wikipedia.org/wiki/Relational_database_management_system)[* ](https://it.wikipedia.org/wiki/Relational_database_management_system)[database*](https://it.wikipedia.org/wiki/Relational_database_management_system)[* ](https://it.wikipedia.org/wiki/Relational_database_management_system)[management*](https://it.wikipedia.org/wiki/Relational_database_management_system)[* ](https://it.wikipedia.org/wiki/Relational_database_management_system)[system*](https://it.wikipedia.org/wiki/Relational_database_management_system)[* ](https://it.wikipedia.org/wiki/Relational_database_management_system)(RDBMS) composto da un

[client](https://it.wikipedia.org/wiki/Client)[ ](https://it.wikipedia.org/wiki/Client)a [riga](https://it.wikipedia.org/wiki/Interfaccia_a_riga_di_comando)[ ](https://it.wikipedia.org/wiki/Interfaccia_a_riga_di_comando)[di](https://it.wikipedia.org/wiki/Interfaccia_a_riga_di_comando)[ ](https://it.wikipedia.org/wiki/Interfaccia_a_riga_di_comando)[comando](https://it.wikipedia.org/wiki/Interfaccia_a_riga_di_comando)[ ](https://it.wikipedia.org/wiki/Interfaccia_a_riga_di_comando)e un [server](https://it.wikipedia.org/wiki/Server), entrambi disponibili sia per

sistemi [Unix](https://it.wikipedia.org/wiki/Unix)[ ](https://it.wikipedia.org/wiki/Unix)e [Unix-](https://it.wikipedia.org/wiki/Unix-like)[ ](https://it.wikipedia.org/wiki/Unix-like)[like](https://it.wikipedia.org/wiki/Unix-like)[ ](https://it.wikipedia.org/wiki/Unix-like)sia per [Windows](https://it.wikipedia.org/wiki/Microsoft_Windows); le

piattaforme

principali di riferimento sono [Linux](https://it.wikipedia.org/wiki/Linux)[ ](https://it.wikipedia.org/wiki/Linux)e [Oracle](https://it.wikipedia.org/wiki/Oracle_Solaris_\(sistema_operativo\))[ ](https://it.wikipedia.org/wiki/Oracle_Solaris_\(sistema_operativo\))[Solaris](https://it.wikipedia.org/wiki/Oracle_Solaris_\(sistema_operativo\)). [Software](https://it.wikipedia.org/wiki/Software_libero)

[libero](https://it.wikipedia.org/wiki/Software_libero)[ ](https://it.wikipedia.org/wiki/Software_libero)rilasciato a doppia licenza, compresa la [GNU](https://it.wikipedia.org/wiki/GNU_General_Public_License)[ ](https://it.wikipedia.org/wiki/GNU_General_Public_License)[General](https://it.wikipedia.org/wiki/GNU_General_Public_License)[ ](https://it.wikipedia.org/wiki/GNU_General_Public_License)[Public](https://it.wikipedia.org/wiki/GNU_General_Public_License)

[License](https://it.wikipedia.org/wiki/GNU_General_Public_License), sviluppato per essere il più possibile conforme agli

standard ANSI [SQL](https://it.wikipedia.org/wiki/Structured_Query_Language)[ ](https://it.wikipedia.org/wiki/Structured_Query_Language)e ODBC SQL. I sistemi e

i [linguaggi](https://it.wikipedia.org/wiki/Linguaggi_di_programmazione)[ ](https://it.wikipedia.org/wiki/Linguaggi_di_programmazione)[di](https://it.wikipedia.org/wiki/Linguaggi_di_programmazione)

[programmazione](https://it.wikipedia.org/wiki/Linguaggi_di_programmazione)[ ](https://it.wikipedia.org/wiki/Linguaggi_di_programmazione)che lo supportano sono molto numerosi: [ODBC](https://it.wikipedia.org/wiki/ODBC),

[Java](https://it.wikipedia.org/wiki/Java_\(linguaggio_di_programmazione\)), [Mono](https://it.wikipedia.org/wiki/Mono_\(progetto\)), [.](https://it.wikipedia.org/wiki/Microsoft_.NET)[ ](https://it.wikipedia.org/wiki/Microsoft_.NET)[NET](https://it.wikipedia.org/wiki/Microsoft_.NET), [PHP](https://it.wikipedia.org/wiki/PHP), [Python](https://it.wikipedia.org/wiki/Python)[ ](https://it.wikipedia.org/wiki/Python)e molti altri. Le piattaforme [LAMP](https://it.wikipedia.org/wiki/LAMP)

e [WAMP](https://it.wikipedia.org/wiki/WAMP_\(piattaforma\))[ ](https://it.wikipedia.org/wiki/WAMP_\(piattaforma\))incorporano MySQL per l'implementazione di server per

gestire [siti](https://it.wikipedia.org/wiki/Sito_web)[ ](https://it.wikipedia.org/wiki/Sito_web)[web](https://it.wikipedia.org/wiki/Sito_web)[ ](https://it.wikipedia.org/wiki/Sito_web)dinamici.

**Protocollo FTP**

File Transfer Protocol (FTP)

*file*), in [informatica](https://it.wikipedia.org/wiki/Informatica)[ ](https://it.wikipedia.org/wiki/Informatica)e nelle [telecomunicazioni](https://it.wikipedia.org/wiki/Telecomunicazioni),

(*protocollo di trasferimento*

un

è

[protocollo](https://it.wikipedia.org/wiki/Protocollo_\(informatica\))[ ](https://it.wikipedia.org/wiki/Protocollo_\(informatica\))per la [trasmissione](https://it.wikipedia.org/wiki/Trasmissione_\(telecomunicazioni\))[ ](https://it.wikipedia.org/wiki/Trasmissione_\(telecomunicazioni\))di [dati](https://it.wikipedia.org/wiki/Dati)[ ](https://it.wikipedia.org/wiki/Dati)tra [host](https://it.wikipedia.org/wiki/Host)[ ](https://it.wikipedia.org/wiki/Host)basato su [TCP](https://it.wikipedia.org/wiki/Transmission_Control_Protocol)[ ](https://it.wikipedia.org/wiki/Transmission_Control_Protocol)e con

[architettura](https://it.wikipedia.org/wiki/Sistema_client/server)[ ](https://it.wikipedia.org/wiki/Sistema_client/server)[di](https://it.wikipedia.org/wiki/Sistema_client/server)[ ](https://it.wikipedia.org/wiki/Sistema_client/server)[tipo](https://it.wikipedia.org/wiki/Sistema_client/server)[ ](https://it.wikipedia.org/wiki/Sistema_client/server)[client-server](https://it.wikipedia.org/wiki/Sistema_client/server). Il protocollo usa connessioni TCP

distinte per trasferire i dati e per controllare i trasferimenti e richiede

autenticazione del client tramite nome utente e password, sebbene

il [server](https://it.wikipedia.org/wiki/Server_FTP)[ ](https://it.wikipedia.org/wiki/Server_FTP)possa essere configurato per connessioni anonime con

credenziali fittizie. Dato che FTP trasmette in chiaro sia tali

credenziali sia ogni altra comunicazione, e visto che non dispone di

meccanismi di autenticazione del server presso il client, il

protocollo è spesso reso sicuro utilizzando un sottostrato

[SSL/TLS](https://it.wikipedia.org/wiki/SSL/TLS)[ ](https://it.wikipedia.org/wiki/SSL/TLS)e tale variante è chiamata [FTPS](https://it.wikipedia.org/wiki/FTPS). FTP, a differenza di altri

protocolli come per esempio [HTTP](https://it.wikipedia.org/wiki/Hypertext_Transfer_Protocol), utilizza due [connessioni](https://it.wikipedia.org/wiki/Connessione_\(informatica\))

separate per gestire comandi e dati. Un [server](https://it.wikipedia.org/wiki/Server_FTP)[ ](https://it.wikipedia.org/wiki/Server_FTP)[FTP](https://it.wikipedia.org/wiki/Server_FTP)[ ](https://it.wikipedia.org/wiki/Server_FTP)generalmente

rimane in ascolto sulla [porta](https://it.wikipedia.org/wiki/Porta_\(reti\))[ ](https://it.wikipedia.org/wiki/Porta_\(reti\))21 [TCP](https://it.wikipedia.org/wiki/Transmission_Control_Protocol)[ ](https://it.wikipedia.org/wiki/Transmission_Control_Protocol)a cui si connette il [client](https://it.wikipedia.org/wiki/Client). La

connessione da parte del client determina l'inizializzazione del

31





canale comandi attraverso il quale client e server si scambiano

comandi e risposte.

32





Lo scambio effettivo di dati (come per esempio un [file](https://it.wikipedia.org/wiki/File)) richiede l'apertura del

canale dati, che può essere di due tipi. In un canale dati di tipo attivo il client

apre una porta solitamente casuale, tramite il canale comandi rende noto il

numero di tale porta al server e attende che si connetta. Una volta che il

server ha attivato la connessione dati al client FTP, quest'ultimo effettua il

binding della porta sorgente alla porta 20 del server FTP. A tale scopo

possono venire impiegati i comandi PORT o EPRT, a seconda del

protocollo di rete utilizzato (in genere [IPv4](https://it.wikipedia.org/wiki/IPv4)[ ](https://it.wikipedia.org/wiki/IPv4)o [IPv6](https://it.wikipedia.org/wiki/IPv6)). In un canale dati di

tipo passivo il server apre una porta solitamente casuale (superiore alla

1023), tramite il canale comandi rende noto il numero di tale porta al client e

attende che si connetta. A tale scopo possono venire impiegati i comandi

PASV o EPSV, a seconda del protocollo di rete utilizzato (in genere [IPv4](https://it.wikipedia.org/wiki/IPv4)[ ](https://it.wikipedia.org/wiki/IPv4)o

[IPv6](https://it.wikipedia.org/wiki/IPv4)).

**Filezilla**

FileZilla Client è un [software](https://it.wikipedia.org/wiki/Software_libero)[ ](https://it.wikipedia.org/wiki/Software_libero)[libero](https://it.wikipedia.org/wiki/Software_libero)[ ](https://it.wikipedia.org/wiki/Software_libero)[multipiattaforma](https://it.wikipedia.org/wiki/Multipiattaforma)[ ](https://it.wikipedia.org/wiki/Multipiattaforma)che permette il

trasferimento di [file](https://it.wikipedia.org/wiki/File)[ ](https://it.wikipedia.org/wiki/File)in [Rete](https://it.wikipedia.org/wiki/Internet)[ ](https://it.wikipedia.org/wiki/Internet)attraverso il [protocollo](https://it.wikipedia.org/wiki/Protocollo_di_comunicazione)[ ](https://it.wikipedia.org/wiki/Protocollo_di_comunicazione)[FTP](https://it.wikipedia.org/wiki/File_Transfer_Protocol). Il [programma](https://it.wikipedia.org/wiki/Programma_\(informatica\))[ ](https://it.wikipedia.org/wiki/Programma_\(informatica\))è

disponibile per [GNU/Linux](https://it.wikipedia.org/wiki/GNU/Linux), [Microsoft](https://it.wikipedia.org/wiki/Microsoft)[ ](https://it.wikipedia.org/wiki/Microsoft)[Windows](https://it.wikipedia.org/wiki/Windows), e [macOS](https://it.wikipedia.org/wiki/MacOS). Tra i vari protocolli

supportati, oltre all'[FTP](https://it.wikipedia.org/wiki/File_Transfer_Protocol)[ ](https://it.wikipedia.org/wiki/File_Transfer_Protocol)vi è l'[SFTP](https://it.wikipedia.org/wiki/SFTP), e l'[FTP](https://it.wikipedia.org/wiki/File_Transfer_Protocol)[ ](https://it.wikipedia.org/wiki/File_Transfer_Protocol)su [SSL/TLS](https://it.wikipedia.org/wiki/SSL/TLS). Le principali

caratteristiche del programma sono:

● il *site manager*, che permette all'utente di creare una lista di siti [FTP](https://it.wikipedia.org/wiki/File_Transfer_Protocol)[ ](https://it.wikipedia.org/wiki/File_Transfer_Protocol)e di

selezionarne uno con un menù a tendina. Una volta selezionato il sito

desiderato, il programma si connetterà al sito stesso permettendo l'[upload](https://it.wikipedia.org/wiki/Upload)

o il [download](https://it.wikipedia.org/wiki/Download)[ ](https://it.wikipedia.org/wiki/Download)di file;

● il *message log*, è presente in alto e contiene la lista di tutti i messaggi

inviati ai server dal programma e le relative risposte ricevute dai server

[FTP](https://it.wikipedia.org/wiki/File_Transfer_Protocol);

● il *file and folder view*, è [l'interfaccia](https://it.wikipedia.org/wiki/Interfaccia_grafica)[ ](https://it.wikipedia.org/wiki/Interfaccia_grafica)[grafica](https://it.wikipedia.org/wiki/Interfaccia_grafica)[ ](https://it.wikipedia.org/wiki/Interfaccia_grafica)associata al motore di

trasferimento dei file. Posto al di sotto del *message log* e composto da due

finestre di egual grandezza, esso permette all'utente di fare il *drag and*

*drop* ovvero di navigare tra le cartelle del sistema (parte sinistra) e

trascinare dall'altra parte (parte destra) per trasferire i file o le cartelle

selezionate sul server desiderato;

● il *transfer queue*, posto sulla parte inferiore della schermata, è formato da

una luce rossa e una verde e indica la [velocità](https://it.wikipedia.org/wiki/Velocit%C3%A0_di_trasmissione)[ ](https://it.wikipedia.org/wiki/Velocit%C3%A0_di_trasmissione)[di](https://it.wikipedia.org/wiki/Velocit%C3%A0_di_trasmissione)[ ](https://it.wikipedia.org/wiki/Velocit%C3%A0_di_trasmissione)[trasmissione](https://it.wikipedia.org/wiki/Velocit%C3%A0_di_trasmissione)[ ](https://it.wikipedia.org/wiki/Velocit%C3%A0_di_trasmissione)in

download o upload.

33





**Antivirus scelto**

**Norton Antivirus**

Norton Antivirus è un programma [antivirus](https://it.wikipedia.org/wiki/Antivirus)[ ](https://it.wikipedia.org/wiki/Antivirus)prodotto dalla Nortonlifelock e

progettato per individuare ed eliminare [virus](https://it.wikipedia.org/wiki/Virus_\(informatica\)), [trojan](https://it.wikipedia.org/wiki/Trojan_\(informatica\)), [worm](https://it.wikipedia.org/wiki/Worm)[ ](https://it.wikipedia.org/wiki/Worm)e recentemente

anche [spyware](https://it.wikipedia.org/wiki/Spyware)[ ](https://it.wikipedia.org/wiki/Spyware)e [adware](https://it.wikipedia.org/wiki/Adware). Norton Antivirus è uno dei più diffusi programmi

antivirus ed è disponibile per sistemi operativi [Windows](https://it.wikipedia.org/wiki/Microsoft_Windows), [macOS](https://it.wikipedia.org/wiki/MacOS)[ ](https://it.wikipedia.org/wiki/MacOS)e [Linux](https://it.wikipedia.org/wiki/Linux). Il

programma è in grado di rilevare [virus](https://it.wikipedia.org/wiki/Virus_\(informatica\))[ ](https://it.wikipedia.org/wiki/Virus_\(informatica\))presenti nella [posta](https://it.wikipedia.org/wiki/Posta_elettronica)[ ](https://it.wikipedia.org/wiki/Posta_elettronica)[elettronica](https://it.wikipedia.org/wiki/Posta_elettronica)[ ](https://it.wikipedia.org/wiki/Posta_elettronica)e in [file](https://it.wikipedia.org/wiki/File)

scaricati dal [web](https://it.wikipedia.org/wiki/Web)[ ](https://it.wikipedia.org/wiki/Web)o comunque presenti nelle unità del sistema. Il programma

include una funzione di aggiornamento automatico che ogni 5/15 minuti

provvede a recuperare le ultime versioni del [database](https://it.wikipedia.org/wiki/Database)[ ](https://it.wikipedia.org/wiki/Database)dei virus ed

aggiornamenti del programma.

**Piani e vantaggi Norton**

Si opta per il piano Norton 360 Premium per 2 anni al costo di 109,99€ valido

per 10 PC, Mac, Smartphone o Tablet**.** Il piano offre:

\- **Protezione dalle minacce in tempo reale:** La sicurezza

avanzata con antivirus aiuta a proteggere dalle minacce online

esistenti ed emergenti per i dispositivi e a salvaguardare le

informazioni riservate e finanziarie quando si accede online

\- **Secure VPN:** Navigare in modo anonimo e con maggiore

sicurezza con la rete privata virtuale (VPN) senza tracciamento

delle attività.

**- Protezione minori**

\- **Password Manager:** Strumenti per generare, memorizzare e

gestire facilmente password, informazioni su carte di credito e

altre credenziali online – in modo più sicuro.

\- **75 GB di backup del PC nel cloud:** Salvare file e documenti

importanti come misura preventiva contro la perdita di dati dovuta

a errori dell’unità disco rigido, furto di dispositivi e ransomware

\- **Safecam per PC:** Avviso dei tentativi di accedere alla webcam e

aiuta a bloccare gli accessi non autorizzati.

34





**Costo totale antivirus**

N° Dispositivi:

6

Tipo

dispositivi:

PC

Anni

:

2

Costo (10

Disp.\*2anni)

Totale:

109,99 €

109,99 €

Link Antivirus Norton:

[https://it.norton.com/ps/4up_norton360_nav_ns_nd_np_Reading_tw_nb.](https://it.norton.com/ps/4up_norton360_nav_ns_nd_np_Reading_tw_nb.html)

[html](https://it.norton.com/ps/4up_norton360_nav_ns_nd_np_Reading_tw_nb.html)

35





**Database**

**Definizione diagramma E-R**

associazione o modello entità-relazione) è un modello

teorico per la rappresentazione concettuale e grafica

dei [dati](https://it.wikipedia.org/wiki/Dati)[ ](https://it.wikipedia.org/wiki/Dati)a un alto livello di [astrazione](https://it.wikipedia.org/wiki/Astrazione_\(informatica\)). l modello entità-

associazione viene spesso utilizzato nella prima

fase della [progettazione](https://it.wikipedia.org/wiki/Progettazione)[ ](https://it.wikipedia.org/wiki/Progettazione)di una *base di dati*, nella

quale è necessario tradurre le informazioni risultanti

dall'[analisi](https://it.wikipedia.org/wiki/Analisi_del_dominio)[ ](https://it.wikipedia.org/wiki/Analisi_del_dominio)[di](https://it.wikipedia.org/wiki/Analisi_del_dominio)[ ](https://it.wikipedia.org/wiki/Analisi_del_dominio)[un](https://it.wikipedia.org/wiki/Analisi_del_dominio)

uno *schema* distinguono tre livelli indipendenti e

consecutivi di progettazione: progettazione

[determinato](https://it.wikipedia.org/wiki/Analisi_del_dominio)

[dominio](https://it.wikipedia.org/wiki/Analisi_del_dominio)[ ](https://it.wikipedia.org/wiki/Analisi_del_dominio)in

concettuale, progettazione logica, progettazione fisica.

Propriamente, il modello E-R è la tecnica-principe per

la fase di progettazione concettuale, il modello

relazionale per quella di progettazione logica.

Solamente nell'ultima fase di progettazione fisica, si

prendono

in

considerazione i *software* e *hardware* applicativi,

proprietari e non, esistenti sul mercato.

36





**Diagramma E-R “Marconi Go”**

37





**Chiave di lettura**

● Ogni prodotto può essere aggiunto ad 1 o più ordini

● Ogni ordine deve avere un prodotto

● Ogni ordine deve essere effettuato da 1 utente

● Ogni utente può effettuare 1 o più ordini

● Ogni prodotto deve avere 1 categoria

● Ogni Categoria deve avere 1 o più prodotti

● Ogni prodotto deve avere 1 brand

● Ogni brand deve avere 1 o più prodotti

38





**Progettazione logica**

**Definizione progettazione logica**

[L'obiettivo](http://www.dacrema.com/Informatica/db.htm)[ ](http://www.dacrema.com/Informatica/db.htm)[della](http://www.dacrema.com/Informatica/db.htm)[ ](http://www.dacrema.com/Informatica/db.htm)progettazione logica è quello di costruire

uno [schema](http://www.dacrema.com/Informatica/db.htm)[ ](http://www.dacrema.com/Informatica/db.htm)[logico](http://www.dacrema.com/Informatica/db.htm)[ ](http://www.dacrema.com/Informatica/db.htm)in grado di descrivere in maniera

corretta ed efficiente , tutte le informazioni contenute nello

[schema](http://www.dacrema.com/Informatica/er.htm)[ ](http://www.dacrema.com/Informatica/er.htm)[E-R](http://www.dacrema.com/Informatica/er.htm), prodotto nella fase di progettazione

concettuale. Non si tratta però di una semplice traduzione

da un modello ad un altro, perché prima di passare allo

schema logico, lo schema E-R va ristrutturato per

soddisfare due esigenze: quella di semplificare la traduzione

e quella di ottimizzare il progetto. La semplificazione dello

schema si rende necessaria in quanto non tutti i costrutti del

modello E-R hanno una traduzione naturale nel modello

logico. Per esempio mentre una entità può essere

facilmente rappresentata da una relazione del [modello](http://www.dacrema.com/Informatica/modello_relazionale.htm)

39





[relazionale](http://www.dacrema.com/Informatica/modello_relazionale.htm)(una [tabella](http://www.dacrema.com/Informatica/gerarchie.htm)[ ](http://www.dacrema.com/Informatica/gerarchie.htm)[avente](http://www.dacrema.com/Informatica/gerarchie.htm)[ ](http://www.dacrema.com/Informatica/gerarchie.htm)[gli](http://www.dacrema.com/Informatica/gerarchie.htm)[ ](http://www.dacrema.com/Informatica/gerarchie.htm)[stessi](http://www.dacrema.com/Informatica/gerarchie.htm)[ ](http://www.dacrema.com/Informatica/gerarchie.htm)attributi di un'entità)

[,](http://www.dacrema.com/Informatica/modello_relazionale.htm)[ ](http://www.dacrema.com/Informatica/modello_relazionale.htm)[altre](http://www.dacrema.com/Informatica/modello_relazionale.htm)[ ](http://www.dacrema.com/Informatica/modello_relazionale.htm)[cose,](http://www.dacrema.com/Informatica/modello_relazionale.htm)[ ](http://www.dacrema.com/Informatica/modello_relazionale.htm)come le [gerarchie](http://www.dacrema.com/Informatica/gerarchie.htm)[ ](http://www.dacrema.com/Informatica/gerarchie.htm)[ISA](http://www.dacrema.com/Informatica/gerarchie.htm)[ ](http://www.dacrema.com/Informatica/gerarchie.htm)sono più complicate da

rappresentare. Pertanto è necessario prevedere sia una

attività di riorganizzazione, sia una attività di traduzione.

Possiamo allora dividere la progettazione logica in due parti:

●

[Ristrutturazione](http://www.dacrema.com/Informatica/ristrutt_er.htm)[ ](http://www.dacrema.com/Informatica/ristrutt_er.htm)dello schema E-R: fase indipendente

dal [modello](http://www.dacrema.com/Informatica/modello_dati.htm)[ ](http://www.dacrema.com/Informatica/modello_dati.htm)[logico](http://www.dacrema.com/Informatica/modello_dati.htm)[ ](http://www.dacrema.com/Informatica/modello_dati.htm)scelto che si basa su criteri di

ottimizzazione dello schema concettuale.

●

[Traduzione](http://www.dacrema.com/Informatica/traduzione_er.htm)[ ](http://www.dacrema.com/Informatica/traduzione_er.htm)verso il modello logico: fa riferimento a uno

specifico modello logico (nel nostro caso al modello

relazionale), e può includere una ulteriore

ottimizzazione che si basa sulle caratteristiche del

modello logico stesso.

40





**Schema logico “Marconi Go”**

Amministratore (id, username, password, created\_at)

Brand(brands\_title, brands\_title)

Categories (cat\_id , cat\_title)

Orders(order\_id , product\_id\*, id, qty, indirizzo, cap)

Product (product\_id, cat\_id\*, brands\_id\*, product\_title, product\_price,

product\_qty, product\_desc)

Users (id, username, password, created\_at)

La chiave primaria è segnata in grassetto ed è di colore

rosso, la chiave esterna ha un \* alla fine

41





**Glossario**

**Nome:**

**ID (Amministratore)**

**user (Amministratore)**

**Significato:**

**Identificativo dell’amministratore**

**User dell’amministratore**

**password (Amministratore)**

**Password dell’amministratore**

**Data e ora della creazione dell’amministratore**

**Identificativo del brand**

**Titolo del brand**

**created\_at (Amministratore)**

**Brand\_ID (Brands)**

**Brand\_title (Brands)**

**Cat\_ID (Categories)**

**Identificativo della categoria**

**Order\_ID (Orders)**

**Identificativo dell’ordine**

**qty (Orders)**

**Quantità dell’ ordine**

**Indirizzo dell’ordine**

**Cap dell’ordine**

**indirizzo (Orders)**

**cap (Orders)**

**Product\_ID (Product)**

**Identificativo del prodotto**

**Product\_title (Product)**

**Product\_Price (Product)**

**Product\_qty (Product)**

**Titolo del prodotto**

**Prezzo del prodotto**

**Quantità del prodotto**

**Product\_desc (Product)**

**ID (users)**

**Descrizione del prodotto**

**Identificativo dell’utente**

**Username dell’utente**

**Username (Users)**

42





**Password (Users)**

**Created\_at (Users)**

**Password dell’utente**

**Data e ora della creazione dell’utente**

**Normalizzazione**

Il database rispetta tutte le forme di normalizzazione

*Controllo della normalizzazione effettuato il*

*7/05/2021 Alle ore 16:45 da: **Emanuele Lepore***

**Definizione di normalizzazione**

In informatica la normalizzazione è un procedimento volto all'eliminazione della ridondanza

informativa e del rischio di incoerenza dal database. Esistono vari livelli di normalizzazione

(forme normali) che certificano la qualità dello schema del database. Questo processo

si fonda su un semplice criterio: se una relazione presenta più concetti tra

loro indipendenti, la si decompone in relazioni più piccole, una per ogni concetto. Questo

tipo di processo non è sempre applicabile in tutte le tabelle, dato che in alcuni casi

potrebbe comportare una perdita di informazioni. Essa ha diverse forme:

\- Prima Forma Normale: Si dice che una base dati è in 1NF (prima forma normale) se vale

la seguente relazione: per ogni relazione contenuta nella base dati, una relazione è in 1NF

se e solo se:

\1. Ciascun attributo è definito su un dominio con valori atomici (indivisibili);

\2. Ogni attributo contiene un singolo valore da quel dominio.

-Seconda Forma Normale: Una base dati è invece in 2NF (seconda forma normale)

quando è in 1NF e per ogni relazione tutti gli attributi non-chiave dipendono funzionalmente

dall'intera chiave composta (ovvero la relazione non ha attributi che dipendono

funzionalmente da una parte della chiave).

-Terza Forma Normale: Una base dati è in 3NF (terza forma normale) se è in 2NF e se tutti

gli attributi non-chiave dipendono dalla chiave soltanto, ossia non esistono attributi

non-chiave che dipendono da altri attributi non-chiave. Tale normalizzazione elimina la

dipendenza transitiva degli attributi dalla chiave. Per ogni dipendenza funzionale non

banale almeno una delle seguenti condizioni è verificata:

43





● X contiene almeno una chiave K di r

● ogni attributo di Y appartiene ad almeno una chiave di r

44





**Hosting**

Per la gestione del sito web si utilizzerà una piattaforma web sicura

ed efficiente, ovvero SiteGround, ma per il prototipo si è optato per

un server di amazon offerto dalla scuola (amazon educate ) e per il

dns , un dns gratis offerto dal sito: [https://dyndns.it/](https://dyndns.it/host-management/)

45





**Comunicazione tra supermercati franchising**

**PEC**

La posta elettronica certificata o PEC è un tipo particolare di [posta](https://it.wikipedia.org/wiki/Posta_elettronica)

[elettronica](https://it.wikipedia.org/wiki/Posta_elettronica)[ ](https://it.wikipedia.org/wiki/Posta_elettronica)utilizzato in alcuni [Stati](https://it.wikipedia.org/wiki/Stati_del_mondo)[ ](https://it.wikipedia.org/wiki/Stati_del_mondo)[del](https://it.wikipedia.org/wiki/Stati_del_mondo)[ ](https://it.wikipedia.org/wiki/Stati_del_mondo)[mondo](https://it.wikipedia.org/wiki/Stati_del_mondo)[ ](https://it.wikipedia.org/wiki/Stati_del_mondo)che permette di

dare a un [messaggio](https://it.wikipedia.org/wiki/Messaggio)[ ](https://it.wikipedia.org/wiki/Messaggio)di [posta](https://it.wikipedia.org/wiki/Posta_elettronica)[ ](https://it.wikipedia.org/wiki/Posta_elettronica)[elettronica](https://it.wikipedia.org/wiki/Posta_elettronica)[ ](https://it.wikipedia.org/wiki/Posta_elettronica)lo stesso valore legale di

una tradizionale [raccomandata](https://it.wikipedia.org/wiki/Raccomandata)[ ](https://it.wikipedia.org/wiki/Raccomandata)con [avviso](https://it.wikipedia.org/wiki/Avviso_di_ricevimento)[ ](https://it.wikipedia.org/wiki/Avviso_di_ricevimento)[di](https://it.wikipedia.org/wiki/Avviso_di_ricevimento)[ ](https://it.wikipedia.org/wiki/Avviso_di_ricevimento)[ricevimento](https://it.wikipedia.org/wiki/Avviso_di_ricevimento),

garantendo così la prova dell'invio e della consegna. Per usufruire

del servizio si deve disporre di una casella di PEC presso uno dei

gestori autorizzati. La pubblicazione dell'elenco dei gestori

autorizzati e quello della Pubblica Amministrazione, la vigilanza e il

coordinamento nei confronti dei gestori e della Pubblica

Amministrazione è demandata all'[*Agenzia*](https://it.wikipedia.org/wiki/Agenzia_per_l%27Italia_digitale)[* ](https://it.wikipedia.org/wiki/Agenzia_per_l%27Italia_digitale)[per*](https://it.wikipedia.org/wiki/Agenzia_per_l%27Italia_digitale)[* ](https://it.wikipedia.org/wiki/Agenzia_per_l%27Italia_digitale)[l'Italia*](https://it.wikipedia.org/wiki/Agenzia_per_l%27Italia_digitale)[* ](https://it.wikipedia.org/wiki/Agenzia_per_l%27Italia_digitale)[digitale*](https://it.wikipedia.org/wiki/Agenzia_per_l%27Italia_digitale). Il

contenuto può essere [certificato](https://it.wikipedia.org/wiki/Certificato_digitale)[ ](https://it.wikipedia.org/wiki/Certificato_digitale)e [firmato](https://it.wikipedia.org/wiki/Firma_elettronica)[ ](https://it.wikipedia.org/wiki/Firma_elettronica)[elettronicamente](https://it.wikipedia.org/wiki/Firma_elettronica)

oppure [criptato](https://it.wikipedia.org/wiki/Crittografia)[ ](https://it.wikipedia.org/wiki/Crittografia)garantendo

quindi

anche

[autenticazione](https://it.wikipedia.org/wiki/Autenticazione), [integrità](https://it.wikipedia.org/wiki/Integrit%C3%A0_dei_dati)[ ](https://it.wikipedia.org/wiki/Integrit%C3%A0_dei_dati)[dei](https://it.wikipedia.org/wiki/Integrit%C3%A0_dei_dati)[ ](https://it.wikipedia.org/wiki/Integrit%C3%A0_dei_dati)[dati](https://it.wikipedia.org/wiki/Integrit%C3%A0_dei_dati)[ ](https://it.wikipedia.org/wiki/Integrit%C3%A0_dei_dati)e [confidenzialità](https://it.wikipedia.org/wiki/Confidenzialit%C3%A0).

Al momento dell'invio di una mail PEC, il [gestore](https://it.wikipedia.org/wiki/Internet_Service_Provider)[ ](https://it.wikipedia.org/wiki/Internet_Service_Provider)PEC del [mittente](https://it.wikipedia.org/wiki/Mittente)

si occuperà di inviare a quest'ultimo una ricevuta che costituirà

valore legale dell'avvenuta (o mancata) trasmissione del

messaggio, con precisa indicazione temporale del momento in cui

la mail PEC è stata inviata. In egual modo, il gestore del

[destinatario](https://it.wikipedia.org/wiki/Destinatario), dopo avergli depositato il messaggio PEC nella sua

casella, fornirà al mittente una ricevuta di avvenuta consegna, con

l'indicazione del momento temporale nel quale tale consegna è

avvenuta. In caso di smarrimento di una delle ricevute presenti nel

sistema PEC è possibile disporre, presso i gestori del servizio, di

una traccia informatica avente lo stesso valore legale in termini di

invio e ricezione, per un periodo di trenta mesi, secondo quanto

previsto dalle normative.

46





**“Invio e ricevuta del messaggio”**

47





**Costi PEC**

**Tipo PEC:**

**Servizio offerto**

**Utenti**

**Costo**

**Spesa**

**da:**

**mensile**

**mensile:**

PEC

multiutente

TIM

10

2,50 €

30,00 €

**Descrizione:**

Dedicata alle imprese e alla PA , rende disponibile una casella

multiutente o "istituzionale" di Posta Elettronica Certificata con 5 GB di

spazio, accessibile mediante client di posta e/o webmail da un

numero massimo di 10 utenti autorizzati. Permette di inviare fino a

500 messaggi al giorno e 50 messaggi al minuto. Nessun limite ai

messaggi ricevuti compatibilmente con la capacità

della casella.

**Costi finali**

Costo

sistemista:

Mesi:

12

2.500 €

Sistema operativo:

Quantità:

6

Costo

Unitario:

Totale

19,50 €

117 €

Windows 10 professional

Totale mensile:

Totale

(1°anno):

48





2.530 €

59.239,88 €

Alla fine del primo anno ci saranno solamente

i costi mensili.

**Query**

**Query 1**

**SELECT p.product\_id, c.cat\_id, p.brands\_id, p.product\_title,**

**p.product\_price, p.product\_qty, p.product\_desc**

**FROM categories c, product p**

**WHERE c.cat\_title= 'Biscotti' AND p.product\_desc= 'Promozione'**

**Query 2**

**SELECT \***

**FROM product p, brands b**

**WHERE p.brands\_id=b.brands\_id AND b.brands\_title=**

**'SuperFrost'**

**GROUP BY p.product\_id**

49





**Creazione delle tabelle**

CREATE TABLE brands (

brand\_id int(100) NOT NULL,

brand\_title text NOT NULL

PRIMARY KEY (brands\_id));

CREATE TABLE categories (

cat\_id INT NOT NULL,

cat\_title VARCHAR(30),

PRIMARY KEY (cat\_id));

CREATE TABLE product(

product\_id INT NOT NULL,

cat\_id INT NOT NULL,

brands\_id INT NOT NULL,

product\_title VARCHAR(30),

product\_price INT,

product\_qty INT,

product\_desc VARCHAR(30),

FOREIGN KEY (cat\_id)

REFERENCES categories (cat\_id),

FOREIGN KEY (brands\_id)

REFERENCES brands (brands\_id),

PRIMARY KEY (product\_id));

50





CREATE TABLE users(

id INT NOT NULL AUTO\_INCREMENT,

username VARCHAR(50) NOT NULL,

password VARCHAR(255) NOT NULL,";

created\_at DATETIME,

PRIMARY KEY (id));

CREATE TABLE orders (

order\_id INT NOT NULL,

product\_id INT NOT NULL,

id INT NOT NULL,

qty INT,

indirizzo VARCHAR(30),

cap (int),

FOREIGN KEY (product\_id)

REFERENCES product (product\_id),

FOREIGN KEY (id)

REFERENCES users (id),

PRIMARY KEY (order\_id));

CREATE TABLE amministratore (

id INT NOT NULL AUTO\_INCREMENT,

username VARCHAR(50),

password VARCHAR(255),

created\_at DATETIME,

PRIMARY KEY (id));

51





**Note aggiuntive: per soddisfare la richiesta della tessera si è**

**optato per questa soluzione, utilizzando un router firewall che**

**autorizza l’accesso alla rete utenti attraverso un nome utente**

**e una password.**

52





**Diagramma costi mensili**

53





**Diagramma di Gantt**

54





**Preventivo**

55





**Analisi di mercato**

Analizzando il supermercato Marconi Go, e mettendolo a

confronto con gli altri supermercati, si evince che esso fa parte di

una delle categorie dell’industria 4.0 poiché avente diversi

dispositivi IoT. Ciò comporta a un basso consumo di energia

elettrica. Un altro vantaggio che offre questo tipo di supermercato

è proprio quello di avere un sito web dove poter ricercare i prodotti

in promozione e ricercare un brand in particolare, o addirittura

comprarli. Un altro vantaggio di avere un supermercato

appartenente all’industria 4.0 è quello di ricevere finanziamenti

dallo stato italiano con 2 tipi di agevolazioni

\1. Iperammortamento: supervalutazione del 250% degli

investimenti in beni materiali nuovi, dispositivi e tecnologie

abilitanti la trasformazione in chiave 4.0 acquistati o in leasing

\2. Superammortamento: supervalutazione del 140% degli

investimenti in beni strumentali nuovi acquistati o in leasing.

Per chi beneficia dell’iperammortamento possibilità di fruire

dell’agevolazione anche per gli investimenti in beni

strumentali immateriali (software e sistemi IT).

Con tale conseguenza il supermercato ha la possibilità di investire i propri fondi

56





in prodotti di brand conosciuti per metterli in vendita a prezzi ragionevoli. Inoltre

la tessera del cliente mette a disposizione oltre ai vari vantaggi di un classico

supermercato, permette di usufruire della rete internet, attraverso un account

univoco da utilizzare anche nel sito web. L'obiettivo principale è quello di

attrarre i clienti di tutte le età, ma in special modo gli studenti dell’IIS Marconi

poiché lo stesso supermercato è situato vicino all’istituto e potrebbe essere

considerata come un’ulteriore soluzione al classico bar della scuola.

**Executive Summary**

Analyzing the "Marconi Go" supermarket, and comparing it to other

supermarkets, it is possible to see that this kind of supermarket is part

of one of the categories of Industry 4.0 since it has several IoT

devices. This type of supermarket has a lot of advantages, such as a

low consumption of electricity. Another advantage ,that this type of

supermarket offers, is to have a website where you can search for

products on promotion and look for a particular brand, or even buy

them. Another advantage of having a supermarket belonging to

Industry 4.0 is to receive financial funds supported by the Italian State

with 2 types of facilities:

\1. Hyper-depreciation: 250% super-valuation of investments in new

tangible assets, devices and technologies

enabling the transformation in key 4.0 purchased or in leasing.

\2. Super depreciation: supervaluation of 140% of investments in new

capital goods purchased or leased. For those who benefit from the

hyper-amortization there is the possibility to benefit from the

facilitation also for investments in intangible capital goods

(software and IT systems).

As a result, the supermarket has the possibility to invest its funds in

products of well-known brands in order to put them on sale at

57





reasonable prices. In addition to the various advantages of a classic

supermarket, the customer's card also makes it possible to use the

Internet, through a unique account to be used on the website.

**Link del sito**

<http://marconigo.dyncam.com/MarconiGo/login.php>

\1) chmod 400 Esame.pem

\2) ssh -i "Esame.pem" ubuntu@ec2-100-25-145-151.compute-1.amazonaws.com

58


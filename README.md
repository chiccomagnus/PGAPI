# PGAPI
http://www.paginegialle.it/
These are the API to access the Italian yellow pages. 
Ecco le API per accedere alle pagine gialle italiane

##ITALIANO
###Installazione
 - Scarica ed estrai l'archivio
 - `composer install`
 
####Requisiti
 - PHP >= 5.4
 - Il pacchetto utilizza il microframework flight (http://flightphp.com/) che funziona sia con Apache che con Nginx. La versione che andate ad installare disponibile in questo pacchetto è predisposta per Apache ma potete anche configurarla per Nginx
 - Permessi di scrittura nella cartella `Cookies/`

###Utilizzo
Una volta installato il pacchetto potrai accedere alle api come ti è più comodo, o utilizzandolo come server esterno o come script interno.
<br><br>
Consideriamo le api installate alla seguente URL: http://your_url.dom. Le primitive messe a disposizione sono le seguenti:<br>
<b>-http://your_url.dom/number/number%20to%20search :</b> dove "number%20to%20search" è il numero di telefono codificato tramite url encoding (sono ammessi gli spazi)<br>
<b>-http://your_url.dom/company/company%20to%20search :</b> dove "company%20to%20search" è il nome dell'azienda codificato tramite url encoding (sono ammessi gli spazi)<br>
<b>-http://your_url.dom/place/restricted%20area :</b> dove "restricted%20area" è la zona territoriale a cui restringere la ricerca codificato tramite url encoding (sono ammessi gli spazi). Sono ammessi tutti gli indirizzi postali, i CAP, le province, i comuni, le regioni, anche le frazioni specificando la provincia. Non è possibile usufruire della geolocalizzazione.<br>
<b>-http://your_url.dom/company/company%20to%20search/place/restricted%20area :</b> dove "company%20to%20search" è il nome dell'azienda codificato tramite url encoding (sono ammessi gli spazi) e "restricted%20area" è la zona territoriale a cui restringere la ricerca codificato tramite url encoding (sono ammessi gli spazi) per come utilizzarlo riferirsi al punto precedente<br>
<b>-http://your_url.dom/category/0000000000 : </b>dove "0000000000" è il numero della categoria di aziende corrispondente. Puoi ottenere questo numero da una risposta precedente su un'altra ricerca<br>
<b>-http://your_url.dom/search/term%20to%20search :</b> dove "term%20to%20search" è la ricerca generica da effettuare codificato tramite url encoding (sono ammessi gli spazi)<br>

###Risposta
Ecco una risposta tipica a una chiamata alle API

```JSON
{
    "result": [
        {
            "name": "...",
            "subtitle": "..." | "" | null,
            "description": "..." | null,
            "image": "..." | null,
            "place": {
                "address": "..." | null,
                "postal-code": "..." | null,
                "locality": "..." | null,
                "region": "..." | null,
                "state": "..." | null,
                "latitude": "..." | null,
                "longitude": "..." | null
            },
            "telephone": "..." | null,
            "website": "..." | null,
            "category": "...",
            "category-number": "..."
        },
        {
            ...
        }
    ],
    "status": "OK" | "ERROR",
    "length": ...,
    "source": "http:\/\/www.paginegialle.it\/ricerca\/...",
    "query": "...",
    "nextPage": null,
}
```
**NOTE**
Nel caso sopravvenga un errore lo status passa da `OK` a `ERROR`.
`nextPage` contiene l'url da chiamare per ottenere la prossima lista di risultati

###Uso con PHP
Si può anche usare direttamente la classe predisposta nel file <b>class.php</b>. Per la chiamata rivolgersi a come vengono implementate le URL sul sito delle pagine gialle.

##ENGLISH
###Install
 - Download and extract the archive
 - `composer install`
 
####Requirements
- PHP >= 5.4<br>
- The package uses the microframework flight (http://flightphp.com/) that works with both Apache and Nginx. The version that you are going to install, available in this package, is designed for Apache but tou can change it for Nginx<br>
- Permission to write to the folder `Cookies/` 

###Using
When the package is installed you can access the API as you are more comfortable, or using it as external server or internal the script.
<br>
Consider bees installed at the following URL: http://your_url.dom. The primitives available are the following: <br>
<b> -http://your_url.dom/number/number%20to%20search: </b> where "number%20to%20search" is the phone number encoded using url encoding (spaces are allowed) <br>
<b> -http://your_url.dom/company/company%20to%20search: </b> where "company%20to%20search" is the name of the encoded through url encoding (spaces are allowed) <br>
<b> -http://your_url.dom/place/restricted%20area: </b> where "restricted%20area" is the geographical area to which restrict your search encoded trough url encoding (spaces are allowed). Allowed all postal addresses, zip codes, provinces, municipalities, regions, even fractions specifying the province. You can not use the geolocation. <br>
<b> -http://your_url.dom/company/company%20to%20search/place/restricted%20area: </b> where "company%20to%20search" is the name of the company encoded through url encoding (are allowed the spaces) and "restricted%20area" is the geographical area that restrict your search encoded by url encoding (spaces are allowed) to use it as referring to the previous point <br>
<b> -http://your_url.dom/category/0000000000: </b> where "0000000000" is the number of the category of the corresponding companies. You can get this number from a previous response on another search <br>
<b> -http://your_url.dom/search/term%20to%20search: </b> where "term%20to%20search" is a generic research encoded using url encoding (spaces are allowed) <br>

###Response
Here is a typical response to a call to the API

```JSON
{
    "result": [
        {
            "name": "...",
            "subtitle": "..." | "" | null,
            "description": "..." | null,
            "image": "..." | null,
            "place": {
                "address": "..." | null,
                "postal-code": "..." | null,
                "locality": "..." | null,
                "region": "..." | null,
                "state": "..." | null,
                "latitude": "..." | null,
                "longitude": "..." | null
            },
            "telephone": "..." | null,
            "website": "..." | null,
            "category": "...",
            "category-number": "..."
        },
        {
            ...
        }
    ],
    "status": "OK" | "ERROR",
    "length": ...,
    "source": "http:\/\/www.paginegialle.it\/ricerca\/...",
    "query": "...",
    "nextPage": null
}
```
**NOTE**
If an error will overtake the status changes from `OK` to `ERROR`.
`nextPage` contains the url to retrieve the next set of results

### Using PHP
You can also directly use the class in the <b> class.php script</b>. For the direct call see how are implemented as URLs on the site of the yellow pages.

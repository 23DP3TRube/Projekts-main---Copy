# Vue un Laravel tīmekļa lietotne projekts

Šis ir skolas projekts, kas izveido vietni, izmantojot Vue (priekšgala) un Laravel (aizmugursistēmai). Tas ir pilna steka lietojums, kas nozīmē, ka tam ir gan lietotāja saskarne, gan servera puses loģika.

## Ko šis projekts dara

- **Priekšgals**: Skaista vietne, kas izveidota ar Vue 3 un Vuetify (dizaina bibliotēka)
- **Aizmugursistēma**: Serveris, kas izveidots ar Laravel, kas apstrādā datus un pieprasījumus
- **Datubāze**: Izmanto SQLite, lai saglabātu informāciju (viegli iestatīt)
- **Funkcijas**: Atbildīgs dizains, kas darbojas telefonos un datoros, un savieno priekšgalu ar aizmugursistēmu

## Izmantotās tehnoloģijas

- **Vue 3**: JavaScript ietvars lietotāja saskarņu izveidei
- **Vuetify**: Material Design komponenti Vue
- **Laravel**: PHP ietvars tīmekļa lietojumiem
- **SQLite**: Vienkārša datubāze, kas neprasa serveri
- **Vite**: Rīks, kas palīdz ātri veidot un palaist projektu

## Kas jāinstalē vispirms

Pirms varat palaist šo projektu, jums jāinstalē šīs programmas:

1. **Node.js** (versija 20.19.0 vai jaunāka) - Lejupielādējiet no https://nodejs.org/
2. **PHP** (versija 8.2 vai jaunāka) - Lejupielādējiet no https://www.php.net/
3. **Composer** - Lejupielādējiet no https://getcomposer.org/
4. **Git** - Lejupielādējiet no https://git-scm.com/

## Kā sākt

### 1. solis: Lejupielādējiet projektu

Ja jums ir projekta faili, pārejiet uz 2. soli. Pretējā gadījumā:

```bash
git clone <your-project-url>
cd "Projekts-main - Copy"
```

### 2. solis: Iestatiet priekšgalu (Vue daļu)

1. Atveriet komandu uzvedni vai termināli
2. Dodieties uz priekšgala mapi:
   ```bash
   cd Frontend/vue-project
   ```
3. Instalējiet nepieciešamās pakotnes:
   ```bash
   npm install
   ```
4. Sāciet izstrādes serveri:
   ```bash
   npm run dev
   ```

Vietne tiks atvērta vietnē http://localhost:5173

### 3. solis: Iestatiet aizmugursistēmu (Laravel daļu)

1. Atveriet jaunu komandu uzvedni vai termināli (saglabājiet pirmo darbojošos)
2. Dodieties uz aizmugursistēmas mapi:
   ```bash
   cd Backend/example-app
   ```
3. Instalējiet PHP pakotnes:
   ```bash
   composer install
   ```
4. Kopējiet vides failu:
   ```bash
   cp .env.example .env
   ```
5. Ģenerējiet lietojumprogrammas atslēgu:
   ```bash
   php artisan key:generate
   ```
6. Iestatiet datubāzi:
   ```bash
   php artisan migrate
   ```
7. Sāciet serveri:
   ```bash
   php artisan serve
   ```

API būs pieejams vietnē http://127.0.0.1:8000

## Projekta mapes

```
Projekts-main - Copy/
├── Frontend/
│   └── vue-project/          # Vue vietnes faili
│       ├── src/
│       │   ├── components/   # Atkārtoti lietojamās vietnes daļas
│       │   ├── assets/       # Attēli un stili
│       │   └── pages/        # Dažādas vietnes lapas
│       ├── public/           # Faili, kas nemainās
│       └── package.json      # Priekšgala rīku saraksts
├── Backend/
│   └── example-app/          # Laravel servera faili
│       ├── app/              # Galvenais lietojumprogrammas kods
│       ├── config/           # Iestatījumu faili
│       ├── database/         # Datubāzes iestatījumu faili
│       ├── public/           # Publiskie tīmekļa faili
│       ├── resources/        # Šabloni un aktīvi
│       ├── routes/           # URL definīcijas
│       └── composer.json     # Aizmugursistēmas rīku saraksts
└── README.md                 # Šis fails
```

## API informācija

Aizmugursistēma nodrošina šos galapunktus:
- `GET /api/home` - Iegūst datus mājas lapai

## Kā palaist projektu

1. Pārliecinieties, ka abi serveri darbojas (no 2. un 3. soļa iepriekš)
2. Atveriet tīmekļa pārlūku
3. Dodieties uz http://localhost:5173
4. Vietne jāielādējas un automātiski jāsavienojas ar aizmugursistēmu

## Veidošana gala versijai

Kad esat pabeidzis izstrādi:

**Priekšgalam:**
```bash
cd Frontend/vue-project
npm run build
```

**Aizmugursistēmai:**
```bash
cd Backend/example-app
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Biežākās problēmas un risinājumi

### Ja npm install nedarbojas:
- Pārliecinieties, ka Node.js ir pareizi instalēts
- Mēģiniet dzēst `node_modules` mapi un palaist `npm install` vēlreiz

### Ja composer install nedarbojas:
- Pārliecinieties, ka PHP ir instalēts un atrodas jūsu PATH
- Pārbaudiet, vai Composer ir instalēts

### Ja vietne neielādējas:
- Pārbaudiet, ka abi serveri darbojas
- Pārliecinieties, ka porti (5173 un 8000) netiek izmantoti citām programmām

### Ja rodas datubāzes kļūdas:
- Palaidiet `php artisan migrate` vēlreiz
- Pārbaudiet, vai `.env` failā ir pareizi datubāzes iestatījumi

### PowerShell problēmas (Windows):
Ja PowerShell saka "execution of scripts is disabled":
```powershell
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
```

## Vairāk palīdzības

Pārbaudiet šos failus papildinformācijai:
- **[START_HERE.md](./START_HERE.md)** - Pamata sākuma ceļvedis
- **[SETUP.md](./SETUP.md)** - Detalizēti iestatīšanas soļi
- **[QUICK_REFERENCE.md](./QUICK_REFERENCE.md)** - Ātro komandu atsauce

## Par šo projektu

Šis projekts tika izveidots kā daļa no skolas uzdevuma, lai mācītos par pilna steka tīmekļa izstrādi, izmantojot modernas tehnoloģijas. Tas demonstrē, kā izveidot pilnīgu tīmekļa lietojumu ar atsevišķām priekšgala un aizmugursistēmas komponentēm, kas darbojas kopā.

## Licence

Šis projekts izmanto MIT licenci.

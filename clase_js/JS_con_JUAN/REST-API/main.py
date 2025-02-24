from fastapi import FastAPI, HTTPException, Form
from pydantic import BaseModel
from typing import List, Optional
from fastapi.middleware.cors import CORSMiddleware  # Importar CORSMiddleware

app = FastAPI()

# Configurar CORS
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Permite todos los orígenes (en producción, cambia esto a tu dominio específico)
    allow_credentials=True,
    allow_methods=["*"],  # Permite todos los métodos (GET, POST, PUT, DELETE, etc.)
    allow_headers=["*"],  # Permite todos los encabezados
)

juegosAutoincrement = 100
desarrolladoresAutoincrement = 60

class DesarrolladorDTO(BaseModel):
    nombre: str
    pais: str

class VideojuegoDTO(BaseModel):
    nombre: str
    id_desarrollador: int
    año: int
    genero: str

# Modelo Pydantic para Desarrollador
class Desarrollador(BaseModel):
    id: int
    nombre: str
    pais: str

# Modelo Pydantic para Videojuego
class Videojuego(BaseModel):
    id: int
    nombre: str
    desarrollador: Desarrollador  # Ahora es un objeto Desarrollador
    año: int
    genero: str



# Base de datos en memoria para desarrolladores
db_desarrolladores = [
    Desarrollador(id=1, nombre="Nintendo", pais="Japón"),
    Desarrollador(id=2, nombre="Rockstar Games", pais="Estados Unidos"),
    Desarrollador(id=3, nombre="CD Projekt", pais="Polonia"),
    Desarrollador(id=4, nombre="Ubisoft", pais="Francia"),
    Desarrollador(id=5, nombre="Electronic Arts", pais="Estados Unidos"),
    Desarrollador(id=6, nombre="Square Enix", pais="Japón"),
    Desarrollador(id=7, nombre="Bethesda", pais="Estados Unidos"),
    Desarrollador(id=8, nombre="Capcom", pais="Japón"),
    Desarrollador(id=9, nombre="FromSoftware", pais="Japón"),
    Desarrollador(id=10, nombre="Blizzard Entertainment", pais="Estados Unidos"),
    Desarrollador(id=11, nombre="Mojang", pais="Suecia"),
    Desarrollador(id=12, nombre="Valve", pais="Estados Unidos"),
    Desarrollador(id=13, nombre="Epic Games", pais="Estados Unidos"),
    Desarrollador(id=14, nombre="Naughty Dog", pais="Estados Unidos"),
    Desarrollador(id=15, nombre="Sony Interactive Entertainment", pais="Japón"),
    Desarrollador(id=16, nombre="Microsoft Studios", pais="Estados Unidos"),
    Desarrollador(id=17, nombre="Bandai Namco", pais="Japón"),
    Desarrollador(id=18, nombre="Sega", pais="Japón"),
    Desarrollador(id=19, nombre="Konami", pais="Japón"),
    Desarrollador(id=20, nombre="BioWare", pais="Canadá"),
    Desarrollador(id=21, nombre="Team Cherry", pais="Australia"),
    Desarrollador(id=22, nombre="Maddy Makes Games", pais="Canadá"),
    Desarrollador(id=23, nombre="ConcernedApe", pais="Estados Unidos"),
    Desarrollador(id=24, nombre="Atlus", pais="Japón"),
    Desarrollador(id=25, nombre="Toby Fox", pais="Estados Unidos"),
    Desarrollador(id=26, nombre="Riot Games", pais="Estados Unidos"),
    Desarrollador(id=27, nombre="Kojima Productions", pais="Japón"),
    Desarrollador(id=28, nombre="Remedy Entertainment", pais="Finlandia"),
    Desarrollador(id=29, nombre="ZA/UM", pais="Estonia"),
    Desarrollador(id=30, nombre="Obsidian Entertainment", pais="Estados Unidos"),
    Desarrollador(id=31, nombre="Gearbox Software", pais="Estados Unidos"),
    Desarrollador(id=32, nombre="Infinity Ward", pais="Estados Unidos"),
    Desarrollador(id=33, nombre="4A Games", pais="Ucrania"),
    Desarrollador(id=34, nombre="Bend Studio", pais="Estados Unidos"),
    Desarrollador(id=35, nombre="Asobo Studio", pais="Francia"),
    Desarrollador(id=36, nombre="The Coalition", pais="Canadá"),
    Desarrollador(id=37, nombre="Quantic Dream", pais="Francia"),
    Desarrollador(id=38, nombre="Eidos-Montréal", pais="Canadá"),
    Desarrollador(id=39, nombre="PlatinumGames", pais="Japón"),
    Desarrollador(id=40, nombre="Arkane Studios", pais="Francia"),
    Desarrollador(id=41, nombre="Team Ninja", pais="Japón"),
    Desarrollador(id=42, nombre="NetherRealm Studios", pais="Estados Unidos"),
    Desarrollador(id=43, nombre="Vicarious Visions", pais="Estados Unidos"),
    Desarrollador(id=44, nombre="MachineGames", pais="Suecia"),
    Desarrollador(id=45, nombre="Studio MDHR", pais="Canadá"),
    Desarrollador(id=46, nombre="Larian Studios", pais="Bélgica"),
    Desarrollador(id=47, nombre="Ninja Theory", pais="Reino Unido"),
    Desarrollador(id=48, nombre="Giant Sparrow", pais="Estados Unidos"),
    Desarrollador(id=49, nombre="Infinite Fall", pais="Estados Unidos"),
    Desarrollador(id=50, nombre="Supergiant Games", pais="Estados Unidos"),
    Desarrollador(id=51, nombre="Motion Twin", pais="Francia"),
    Desarrollador(id=52, nombre="Subset Games", pais="Estados Unidos"),
    Desarrollador(id=53, nombre="Lucas Pope", pais="Estados Unidos"),
    Desarrollador(id=54, nombre="Nomada Studio", pais="España"),
    Desarrollador(id=55, nombre="Askiisoft", pais="Estados Unidos"),
    Desarrollador(id=56, nombre="Hempuli", pais="Finlandia"),
    Desarrollador(id=57, nombre="Mobius Digital", pais="Estados Unidos"),
    Desarrollador(id=58, nombre="Simogo", pais="Suecia"),
    Desarrollador(id=59, nombre="House House", pais="Australia"),
    Desarrollador(id=60, nombre="Bluepoint Games", pais="Estados Unidos"),
]

# Base de datos en memoria para videojuegos
db_videojuegos = [
    Videojuego(id=1, nombre="The Legend of Zelda: Breath of the Wild", desarrollador=db_desarrolladores[0], año=2017, genero="Aventura"),
    Videojuego(id=2, nombre="Super Mario Odyssey", desarrollador=db_desarrolladores[0], año=2017, genero="Plataformas"),
    Videojuego(id=3, nombre="Red Dead Redemption 2", desarrollador=db_desarrolladores[1], año=2018, genero="Acción-Aventura"),
    Videojuego(id=4, nombre="The Witcher 3: Wild Hunt", desarrollador=db_desarrolladores[2], año=2015, genero="RPG"),
    Videojuego(id=5, nombre="Minecraft", desarrollador=db_desarrolladores[10], año=2011, genero="Sandbox"),
    Videojuego(id=6, nombre="Grand Theft Auto V", desarrollador=db_desarrolladores[1], año=2013, genero="Acción-Aventura"),
    Videojuego(id=7, nombre="Dark Souls III", desarrollador=db_desarrolladores[8], año=2016, genero="RPG"),
    Videojuego(id=8, nombre="Portal 2", desarrollador=db_desarrolladores[11], año=2011, genero="Puzzle"),
    Videojuego(id=9, nombre="The Elder Scrolls V: Skyrim", desarrollador=db_desarrolladores[6], año=2011, genero="RPG"),
    Videojuego(id=10, nombre="God of War", desarrollador=db_desarrolladores[13], año=2018, genero="Acción-Aventura"),
    Videojuego(id=11, nombre="Hollow Knight", desarrollador=db_desarrolladores[20], año=2017, genero="Metroidvania"),
    Videojuego(id=12, nombre="Celeste", desarrollador=db_desarrolladores[21], año=2018, genero="Plataformas"),
    Videojuego(id=13, nombre="Stardew Valley", desarrollador=db_desarrolladores[22], año=2016, genero="Simulación"),
    Videojuego(id=14, nombre="Bloodborne", desarrollador=db_desarrolladores[8], año=2015, genero="RPG"),
    Videojuego(id=15, nombre="Persona 5", desarrollador=db_desarrolladores[23], año=2016, genero="RPG"),
    Videojuego(id=16, nombre="The Last of Us", desarrollador=db_desarrolladores[13], año=2013, genero="Acción-Aventura"),
    Videojuego(id=17, nombre="Horizon Zero Dawn", desarrollador=db_desarrolladores[14], año=2017, genero="Acción-Aventura"),
    Videojuego(id=18, nombre="Undertale", desarrollador=db_desarrolladores[24], año=2015, genero="RPG"),
    Videojuego(id=19, nombre="Doom (2016)", desarrollador=db_desarrolladores[6], año=2016, genero="Shooter"),
    Videojuego(id=20, nombre="Overwatch", desarrollador=db_desarrolladores[9], año=2016, genero="Shooter"),
    Videojuego(id=21, nombre="Fortnite", desarrollador=db_desarrolladores[12], año=2017, genero="Battle Royale"),
    Videojuego(id=22, nombre="League of Legends", desarrollador=db_desarrolladores[25], año=2009, genero="MOBA"),
    Videojuego(id=23, nombre="Dota 2", desarrollador=db_desarrolladores[11], año=2013, genero="MOBA"),
    Videojuego(id=24, nombre="Counter-Strike: Global Offensive", desarrollador=db_desarrolladores[11], año=2012, genero="Shooter"),
    Videojuego(id=25, nombre="Apex Legends", desarrollador=db_desarrolladores[12], año=2019, genero="Battle Royale"),
    Videojuego(id=26, nombre="Cyberpunk 2077", desarrollador=db_desarrolladores[2], año=2020, genero="RPG"),
    Videojuego(id=27, nombre="Animal Crossing: New Horizons", desarrollador=db_desarrolladores[0], año=2020, genero="Simulación"),
    Videojuego(id=28, nombre="Final Fantasy VII Remake", desarrollador=db_desarrolladores[5], año=2020, genero="RPG"),
    Videojuego(id=29, nombre="Sekiro: Shadows Die Twice", desarrollador=db_desarrolladores[8], año=2019, genero="Acción-Aventura"),
    Videojuego(id=30, nombre="Death Stranding", desarrollador=db_desarrolladores[26], año=2019, genero="Acción-Aventura"),
    Videojuego(id=31, nombre="Control", desarrollador=db_desarrolladores[27], año=2019, genero="Acción-Aventura"),
    Videojuego(id=32, nombre="Disco Elysium", desarrollador=db_desarrolladores[28], año=2019, genero="RPG"),
    Videojuego(id=33, nombre="Resident Evil 2 (Remake)", desarrollador=db_desarrolladores[7], año=2019, genero="Survival Horror"),
    Videojuego(id=34, nombre="Devil May Cry 5", desarrollador=db_desarrolladores[7], año=2019, genero="Acción"),
    Videojuego(id=35, nombre="Fire Emblem: Three Houses", desarrollador=db_desarrolladores[0], año=2019, genero="Estrategia"),
    Videojuego(id=36, nombre="The Outer Worlds", desarrollador=db_desarrolladores[29], año=2019, genero="RPG"),
    Videojuego(id=37, nombre="Borderlands 3", desarrollador=db_desarrolladores[30], año=2019, genero="Shooter"),
    Videojuego(id=38, nombre="Star Wars Jedi: Fallen Order", desarrollador=db_desarrolladores[12], año=2019, genero="Acción-Aventura"),
    Videojuego(id=39, nombre="Call of Duty: Modern Warfare", desarrollador=db_desarrolladores[31], año=2019, genero="Shooter"),
    Videojuego(id=40, nombre="Luigi's Mansion 3", desarrollador=db_desarrolladores[0], año=2019, genero="Aventura"),
    Videojuego(id=41, nombre="Pokémon Sword and Shield", desarrollador=db_desarrolladores[0], año=2019, genero="RPG"),
    Videojuego(id=42, nombre="The Division 2", desarrollador=db_desarrolladores[3], año=2019, genero="Shooter"),
    Videojuego(id=43, nombre="Metro Exodus", desarrollador=db_desarrolladores[32], año=2019, genero="Shooter"),
    Videojuego(id=44, nombre="Days Gone", desarrollador=db_desarrolladores[33], año=2019, genero="Acción-Aventura"),
    Videojuego(id=45, nombre="Kingdom Hearts III", desarrollador=db_desarrolladores[5], año=2019, genero="RPG"),
    Videojuego(id=46, nombre="Anthem", desarrollador=db_desarrolladores[4], año=2019, genero="Shooter"),
    Videojuego(id=47, nombre="A Plague Tale: Innocence", desarrollador=db_desarrolladores[34], año=2019, genero="Aventura"),
    Videojuego(id=48, nombre="Gears 5", desarrollador=db_desarrolladores[35], año=2019, genero="Shooter"),
    Videojuego(id=49, nombre="The Legend of Zelda: Link's Awakening", desarrollador=db_desarrolladores[0], año=2019, genero="Aventura"),
    Videojuego(id=50, nombre="Super Smash Bros. Ultimate", desarrollador=db_desarrolladores[0], año=2018, genero="Lucha"),
    Videojuego(id=51, nombre="Spider-Man", desarrollador=db_desarrolladores[14], año=2018, genero="Acción-Aventura"),
    Videojuego(id=52, nombre="Monster Hunter: World", desarrollador=db_desarrolladores[7], año=2018, genero="Acción-RPG"),
    Videojuego(id=53, nombre="Assassin's Creed Odyssey", desarrollador=db_desarrolladores[3], año=2018, genero="Acción-Aventura"),
    Videojuego(id=54, nombre="Red Dead Redemption 2", desarrollador=db_desarrolladores[1], año=2018, genero="Acción-Aventura"),
    Videojuego(id=55, nombre="Far Cry 5", desarrollador=db_desarrolladores[3], año=2018, genero="Shooter"),
    Videojuego(id=56, nombre="Detroit: Become Human", desarrollador=db_desarrolladores[36], año=2018, genero="Aventura"),
    Videojuego(id=57, nombre="Shadow of the Tomb Raider", desarrollador=db_desarrolladores[37], año=2018, genero="Acción-Aventura"),
    Videojuego(id=58, nombre="Octopath Traveler", desarrollador=db_desarrolladores[5], año=2018, genero="RPG"),
    Videojuego(id=59, nombre="Dragon Quest XI", desarrollador=db_desarrolladores[5], año=2018, genero="RPG"),
    Videojuego(id=60, nombre="Mario Kart 8 Deluxe", desarrollador=db_desarrolladores[0], año=2017, genero="Carreras"),
    Videojuego(id=61, nombre="Splatoon 2", desarrollador=db_desarrolladores[0], año=2017, genero="Shooter"),
    Videojuego(id=62, nombre="Nier: Automata", desarrollador=db_desarrolladores[38], año=2017, genero="RPG"),
    Videojuego(id=63, nombre="Prey", desarrollador=db_desarrolladores[39], año=2017, genero="Shooter"),
    Videojuego(id=64, nombre="Resident Evil 7: Biohazard", desarrollador=db_desarrolladores[7], año=2017, genero="Survival Horror"),
    Videojuego(id=65, nombre="Horizon Zero Dawn", desarrollador=db_desarrolladores[14], año=2017, genero="Acción-Aventura"),
    Videojuego(id=66, nombre="Persona 5", desarrollador=db_desarrolladores[23], año=2017, genero="RPG"),
    Videojuego(id=67, nombre="Nioh", desarrollador=db_desarrolladores[40], año=2017, genero="Acción-RPG"),
    Videojuego(id=68, nombre="For Honor", desarrollador=db_desarrolladores[3], año=2017, genero="Acción"),
    Videojuego(id=69, nombre="Ghost Recon Wildlands", desarrollador=db_desarrolladores[3], año=2017, genero="Shooter"),
    Videojuego(id=70, nombre="Injustice 2", desarrollador=db_desarrolladores[41], año=2017, genero="Lucha"),
    Videojuego(id=71, nombre="Crash Bandicoot N. Sane Trilogy", desarrollador=db_desarrolladores[42], año=2017, genero="Plataformas"),
    Videojuego(id=72, nombre="Wolfenstein II: The New Colossus", desarrollador=db_desarrolladores[43], año=2017, genero="Shooter"),
    Videojuego(id=73, nombre="Cuphead", desarrollador=db_desarrolladores[44], año=2017, genero="Plataformas"),
    Videojuego(id=74, nombre="Divinity: Original Sin II", desarrollador=db_desarrolladores[45], año=2017, genero="RPG"),
    Videojuego(id=75, nombre="Hellblade: Senua's Sacrifice", desarrollador=db_desarrolladores[46], año=2017, genero="Acción-Aventura"),
    Videojuego(id=76, nombre="What Remains of Edith Finch", desarrollador=db_desarrolladores[47], año=2017, genero="Aventura"),
    Videojuego(id=77, nombre="Night in the Woods", desarrollador=db_desarrolladores[48], año=2017, genero="Aventura"),
    Videojuego(id=78, nombre="Pyre", desarrollador=db_desarrolladores[49], año=2017, genero="RPG"),
    Videojuego(id=79, nombre="Hollow Knight", desarrollador=db_desarrolladores[20], año=2017, genero="Metroidvania"),
    Videojuego(id=80, nombre="Celeste", desarrollador=db_desarrolladores[21], año=2018, genero="Plataformas"),
    Videojuego(id=81, nombre="Dead Cells", desarrollador=db_desarrolladores[50], año=2018, genero="Metroidvania"),
    Videojuego(id=82, nombre="Into the Breach", desarrollador=db_desarrolladores[51], año=2018, genero="Estrategia"),
    Videojuego(id=83, nombre="Return of the Obra Dinn", desarrollador=db_desarrolladores[52], año=2018, genero="Puzzle"),
    Videojuego(id=84, nombre="Gris", desarrollador=db_desarrolladores[53], año=2018, genero="Plataformas"),
    Videojuego(id=85, nombre="Katana ZERO", desarrollador=db_desarrolladores[54], año=2019, genero="Acción"),
    Videojuego(id=86, nombre="Baba Is You", desarrollador=db_desarrolladores[55], año=2019, genero="Puzzle"),
    Videojuego(id=87, nombre="Disco Elysium", desarrollador=db_desarrolladores[28], año=2019, genero="RPG"),
    Videojuego(id=88, nombre="Outer Wilds", desarrollador=db_desarrolladores[56], año=2019, genero="Aventura"),
    Videojuego(id=89, nombre="Sayonara Wild Hearts", desarrollador=db_desarrolladores[57], año=2019, genero="Musical"),
    Videojuego(id=90, nombre="Untitled Goose Game", desarrollador=db_desarrolladores[58], año=2019, genero="Simulación"),
    Videojuego(id=91, nombre="Hades", desarrollador=db_desarrolladores[49], año=2020, genero="Roguelike"),
    Videojuego(id=92, nombre="Half-Life: Alyx", desarrollador=db_desarrolladores[11], año=2020, genero="Shooter"),
    Videojuego(id=93, nombre="Doom Eternal", desarrollador=db_desarrolladores[6], año=2020, genero="Shooter"),
    Videojuego(id=94, nombre="The Last of Us Part II", desarrollador=db_desarrolladores[13], año=2020, genero="Acción-Aventura"),
    Videojuego(id=95, nombre="Ghost of Tsushima", desarrollador=db_desarrolladores[14], año=2020, genero="Acción-Aventura"),
    Videojuego(id=96, nombre="Cyberpunk 2077", desarrollador=db_desarrolladores[2], año=2020, genero="RPG"),
    Videojuego(id=97, nombre="Animal Crossing: New Horizons", desarrollador=db_desarrolladores[0], año=2020, genero="Simulación"),
    Videojuego(id=98, nombre="Final Fantasy VII Remake", desarrollador=db_desarrolladores[5], año=2020, genero="RPG"),
    Videojuego(id=99, nombre="Demon's Souls (Remake)", desarrollador=db_desarrolladores[59], año=2020, genero="RPG"),
    Videojuego(id=100, nombre="Spider-Man: Miles Morales", desarrollador=db_desarrolladores[14], año=2020, genero="Acción-Aventura"),
]

# Crear un nuevo videojuego
@app.post("/videojuegos/", response_model=Videojuego)
def crear_videojuego(dto: VideojuegoDTO):
    # Verificar que el desarrollador exista
    global juegosAutoincrement

    desarrollador = next(filter(lambda d : d.id == dto.id_desarrollador,db_desarrolladores), None)

    if desarrollador is None:
        raise HTTPException(status_code=400, detail="Desarrollador no encontrado")
    
    juegosAutoincrement += 1
    videojuego = Videojuego(id = juegosAutoincrement, nombre = dto.nombre, desarrollador=desarrollador, año=dto.año, genero=dto.genero)
    db_videojuegos.append(videojuego)
    return videojuego

# Obtener todos los videojuegos
@app.get("/videojuegos/", response_model=List[Videojuego])
def obtener_videojuegos():
    return db_videojuegos

# Obtener un videojuego por ID
@app.get("/videojuegos/{videojuego_id}", response_model=Videojuego)
def obtener_videojuego(videojuego_id: int):
    videojuego = next(filter(lambda j : j.id == videojuego_id,db_videojuegos),None)
    
    if videojuego is None:
        raise HTTPException(status_code=404, detail="Videojuego no encontrado")
    
    return videojuego

# Actualizar un videojuego por ID
@app.put("/videojuegos/{videojuego_id}", response_model=Videojuego)
def actualizar_videojuego(videojuego_id: int, dto: VideojuegoDTO):
    videojuego = next(filter(lambda j : j.id == videojuego_id,db_videojuegos), None)

    if videojuego is None:
        raise HTTPException(status_code=404, detail="Videojuego no encontrado")
    
    # Verificar que el desarrollador exista
    desarrollador = next(filter(lambda d : d.id == dto.id_desarrollador,db_desarrolladores), None)
    
    if desarrollador is None:
        raise HTTPException(status_code=400, detail="Desarrollador no encontrado")

    videojuego.nombre = dto.nombre
    videojuego.año = dto.año
    videojuego.desarrollador = desarrollador
    videojuego.genero = dto.genero
    
    return videojuego
    

# Eliminar un videojuego por ID
@app.delete("/videojuegos/{videojuego_id}", response_model=Videojuego)
def eliminar_videojuego(videojuego_id: int):
    for idx, videojuego in enumerate(db_videojuegos):
        if videojuego.id == videojuego_id:
            return db_videojuegos.pop(idx)
    raise HTTPException(status_code=404, detail="Videojuego no encontrado")

# Crear un nuevo desarrollador
@app.post("/desarrolladores/", response_model=Desarrollador)
def crear_desarrollador(dto: DesarrolladorDTO):
    global desarrolladoresAutoincrement
    
    desarrolladoresAutoincrement += 1

    desarrollador = Desarrollador(id = desarrolladoresAutoincrement, nombre = dto.nombre, pais = dto.pais)
    db_desarrolladores.append(desarrollador)
    return desarrollador

# Obtener todos los desarrolladores
@app.get("/desarrolladores/", response_model=List[Desarrollador])
def obtener_desarrolladores():
    return db_desarrolladores

# Obtener un desarrollador por ID
@app.get("/desarrolladores/{desarrollador_id}", response_model=Desarrollador)
def obtener_desarrollador(desarrollador_id: int):
    for desarrollador in db_desarrolladores:
        if desarrollador.id == desarrollador_id:
            return desarrollador
    raise HTTPException(status_code=404, detail="Desarrollador no encontrado")

# Actualizar un desarrollador por ID
@app.put("/desarrolladores/{desarrollador_id}", response_model=Desarrollador)
def actualizar_desarrollador(desarrollador_id: int, dto: DesarrolladorDTO):
    desarrollador = next(filter(lambda d : d.id == desarrollador_id,db_desarrolladores), None)

    if desarrollador is None:
        raise HTTPException(status_code=404, detail="Desarrollador no encontrado")

    desarrollador.nombre = dto.nombre
    desarrollador.pais = dto.pais

    return desarrollador
    

# Eliminar un desarrollador por ID
@app.delete("/desarrolladores/{desarrollador_id}", response_model=Desarrollador)
def eliminar_desarrollador(desarrollador_id: int):
    # Buscar el desarrollador
    desarrollador_encontrado = None
    for idx, desarrollador in enumerate(db_desarrolladores):
        if desarrollador.id == desarrollador_id:
            desarrollador_encontrado = db_desarrolladores.pop(idx)
            break
    if not desarrollador_encontrado:
        raise HTTPException(status_code=404, detail="Desarrollador no encontrado")

    # Eliminar todos los videojuegos asociados al desarrollador
    global db_videojuegos
    db_videojuegos = [videojuego for videojuego in db_videojuegos if videojuego.desarrollador.id != desarrollador_id]

    return desarrollador_encontrado


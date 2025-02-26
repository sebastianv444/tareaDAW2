async function peticion() {
    try {
        const data = await fetch('https://api.tcgdex.net/v2/es/cards')
            .then(res => res.json());

        const cards = data.filter(card => card.name === "Charmander" || card.name === "Charmeleon" ||
            card.name === "Charizard"
        );

        cards.forEach(poke => {
            document.querySelector("ul").innerHTML += `
                <li><img src="${poke.image + '/low.webp'}"></li>
            `;
        });
    } catch (error) {
        console.log(`ERROR!!: ${error}`);
    }
}

peticion();
import React from 'react'

function AnimalList() {
  const animals = [
    {
        id: 1,
        name: "dog",
        img: "https://nypost.com/wp-content/"
    },
    {
        id: 2,
        name: "cat",
        img: "https://img.freepik.com/foto-g/"
    },
    {
        id: 3,
        name: "bird",
        img: "https://media.cnn.com/api/v1/img"
    }
  ];

  const HTMLAnimals = animals.map(animal => {
    return (
        <li key={animal.id}>
            <h3>{animal.name}</h3>
            <img src={animal.img} alt="animal picture" width={200}/>
        </li>
    )
  })
  return (
    <section>
        <h2>Animals:</h2>
        <ul>
            {HTMLAnimals}
        </ul>
    </section>
  )
}

export default AnimalList
import { use, useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import HeaderComponent from './components/HeaderComponent'
import ButtonComponent from './components/ButtonComponent'
import Login from './components/Login'
import MovieList from './components/MovieList'
import AnimalList from './components/AnimalList'

function App() {
  /* Variable reactiva: 
  Hooks: los hooks son funciones especiales para manejar
  reactividad(dinamicidad) 
  */
  /* el primer parametro es la variable y el segundo parametro es
  una funcion para modificar la variable reactiva pasada en el 
  primer parametro.
  OJO: por lo general se le pone "setNombreVariable".
  */
  const [number, setNumber] = useState(0); // importamos este useState
  const addOne = () => {
    /* 
      IMPORTANTE!!: se para modificar a las variables reactivas se llaman
      a las que al segundo parametro que le asginaste con el que empieza con
      set seguido de () y dentro el cambio que quieres hacerle.
    */
    /* 
    no podemos usar el ++ direcatamente, ya que estariamos modificando
    la varible directamente, y eso no se puede hacer en reat, por eso usamos
    un + 1 en vez de usar ++.
    */
    setNumber(number + 1);
    console.log(number);
  }
  let myPlaceHolder = "Escribe aqui";

  /* Recuerda que para crear variables reactivas se hacen en formato
  de array. 
  
  En este ejemplo creamos una variable reactiva con el nombre myValue
  y con un valor inicial de un string vacío: "" */
  const [myValue, setMyValue] = useState("");

  const sayHello = () => {
    console.log("Hello!");
  }

  const handleChange = (event) => {
    console.log(event.target.value);
  };

  /* Estas variables son para pasarselas al componente HeaderComponent */
  const [greetings,setGreetings] = useState("Bienvenidos a mi web!");
  const links = {
    home: "Home",
    blog: "Blog",
    news: "News",
    contact: "Contact us"
  }

  /*  */
  const [user,setUser] = useState({});
  const login = (userInfo) => {
    console.log(userInfo);
    setUser(userInfo);
  }

  let condition = false;
  return (
    /* 
    <></>:
    Cuando encapsulas tu código JSX dentro de <> y </>, estás 
    utilizando un fragmento. Esto es útil cuando necesitas 
    devolver múltiples elementos JSX desde un componente, pero 
    no quieres que React cree un elemento contenedor adicional 
    en el DOM (como un <div>).

    ¿Cuando usar fragmentos(<></>)?
    Usa fragmentos (<> y </>) cuando:
    Necesites devolver múltiples elementos JSX.
    No quieras agregar un contenedor extra al DOM (como un <div>).
    Si solo tienes un único elemento JSX, no necesitas fragmentos.
    */
    <>
      {/* PASAR INFORMACIÓN DEL PADRE AL HIJO COMPONENT: */}
      {/* este componente actua como el conjunto del codigo
      especificado en el archivo HeaderComponent.jsx */}
      {/* pasandole unas props con variables reactivas */}
      <HeaderComponent greetings={greetings} links={links}></HeaderComponent>

      <main className='main-content'>
        {/* CONDICIONAL: 
        si el user.userName existe se muestra el h2 */}
        {user.userName && <h2 onClick={sayHello}>Hola {user.userName}</h2>}

        {/* RECIBIR INFORMACIÓN DEL HIJO AL PADRE COMPONENT: */}
        {/* Le pasamos un prop al componente hijo */}
        <Login handleLogin={login}></Login>

          {/* Condicional con ternario: */}
          {condition ? (
            <h2>La condición se cumple</h2>
          ): (
            <h2>La condición NO cumple</h2>
          )}
        <h2 onClick={addOne}>Number: {number}</h2>
        {/*  si queremos usar un atributo reactivo que responda a una 
        variable, tenemos que usar las llaves */}
        <input value={myValue} placeholder={myPlaceHolder} type="text" onChange={handleChange} />

        <br />
        <br />
        <ButtonComponent></ButtonComponent>
        <MovieList></MovieList>
        <AnimalList></AnimalList>
      </main>
    </>
    
  )
}

export default App

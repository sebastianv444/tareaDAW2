import React from 'react'

/* PASAR INFORMACION DEL HIJO AL PADRE */
function Login(props) {
  const user = {
      userName: "adrián",
      email: "adrian@email.com"
  }

  const handleClick = () => {
    props.handleLogin(user)
  };

  return (
    <section>
        <h2>Login Section</h2>
        <button onClick={handleClick}>Login</button>
    </section>
  )
}

export default Login
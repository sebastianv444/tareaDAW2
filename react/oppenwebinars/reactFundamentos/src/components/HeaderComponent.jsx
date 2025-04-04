import "./HeaderComponent.css"

function HeaderComponent(props) {
    /* Este greetings se lo sacamos de donde se llamo a este componente. */
    const { greetings, links } = props;

    return(
        /* 
            En este caso no usamos "<> y </>" porque estamos
            encapsulando todo en un contenedor, que en este 
            caso seria el header. De lo contrario, si no lo 
            encapsulamos en un contenedor padre, si que 
            tendriamos que usar <> y </>.
        */
        <header className="header">
            <h1 className="title">{greetings}</h1>
            <nav>
                <nav>
                    <ul className="header-list">
                        <li>
                            <a className="link" href="~#">{links.home}</a>
                        </li>
                        <li>
                            <a className="link" href="~#">{links.blog}</a>
                        </li>
                        <li>
                            <a className="link" href="~#">{links.news}</a>
                        </li>
                        <li>
                            <a className="link" href="~#">{links.contact}</a>
                        </li>
                    </ul>
                </nav>
            </nav>
        </header>
    );
}

/* Indicamos que este es un componen exportable para poder
   usar este componente en otros lados.
*/
export default HeaderComponent;
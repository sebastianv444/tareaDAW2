/* El primer parametro es el nombre del test y el segundo parametro es un 
callback donde empezara todo tu test */
describe("main",()=>{
    /* El método it() en Cypress se utiliza para definir un caso de prueba o un caso 
    de uso específico dentro de un conjunto de pruebas. */
    /* PRIMER PARAMETRO: Es una cadena de texto que describe claramente lo que este 
    caso de prueba está validando. */
    /* SEGUNDO PARAMETRO: Es un callback (función) donde defines los pasos o acciones 
    que Cypress debe ejecutar para validar ese caso de prueba. */
    it("User generate activity when click button",()=>{
        cy.visit("localhost:8080"); // Visita la página
        //obtenemos el boton con el texto Generate new one y hace clicks.
        cy.get("button").contains("Generate new one").click();

        cy.get("div.activity h4").should("exist");
        cy.get("div.activity a").should("exist");
        cy.get("div.activity p").should("exist");

        /* OJO: este test esta correcto, pero la api que usamos en nuestro codigo js
        en el que hace el test pues esta deprecada, por eso nos salta un error, pero
        este un ejemplo de como se hace un testing basico */
    });
})
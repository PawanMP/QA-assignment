it('Test02',() => {
    cy.visit('http://localhost/vs%20code%20hoc/House%20Of%20Curtains.html')
    cy.get(':nth-child(2) > blockquote > .button').click()
    cy.get(':nth-child(1) > input').type('matcli0003')
    cy.get(':nth-child(4) > input').type('100')
    cy.get('button').click()
    cy.get('.button').click()
    cy.get('#length').type('100')
    cy.get('[type="text"]').type('matcli0003')
    cy.get('button').click()
})
///<reference types="cypress"/>

it('House of Curtains',() => {
    cy.visit('http://localhost/vs%20code%20hoc/House%20Of%20Curtains.html')
    cy.get(':nth-child(1) > blockquote > .button').click()
    cy.get('form > :nth-child(1) > input').type('Pasindu')
    cy.get('blockquote > .search-bar > input').type('0345710105')
    cy.get(':nth-child(7) > input').type('Mathugama')
    cy.get('[type="date"]').type('2024-08-01')
    cy.get('button').click()
})
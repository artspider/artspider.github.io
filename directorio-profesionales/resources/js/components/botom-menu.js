import {LitElement, html} from 'lit-element';

class BotomMenu extends LitElement {
    static get properties() {
        return {

        }
    }

    /**
     * Instance of the element is created/upgraded. Use: initializing state,
     * set up event listeners, create shadow dom.
     * @constructor
     */
    constructor() {
        super();
    }

    static get styles() {
        return [
            super.styles,
            css``,
        ];
    }

    /**
     * Implement to describe the element's DOM using lit-html.
     * Use the element current props to return a lit-html template result
     * to render into the element.
     */
    render() {
        return html`
        <p>Hla kkkh</p>
        `;
    }

}

customElements.define('botom-menu', BotomMenu);

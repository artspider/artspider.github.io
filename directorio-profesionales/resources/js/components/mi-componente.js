import { LitElement, html, css } from 'lit-element';

class MiComponente extends LitElement {
    static get styles() {
        return css``
    }

    static get properties() {
        return {};
    }

    // Implement `render` to define a template for your element.
    render() {
        return html`<p>hola mundo</p>`
    }
}
customElements.define('mi-componente', MiComponente);

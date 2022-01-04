class TextScramble {
    constructor(el) {
        this.el = el
        this.chars = '!<>-_\\/[]{}—=+*^?#_'
        this.update = this.update.bind(this)
    }
    setText(newText) {
        const oldText = this.el.innerText
        const length = Math.max(oldText.length, newText.length)
        const promise = new Promise((resolve) => this.resolve = resolve)
        this.queue = []
        for (let i = 0; i < length; i++) {
            const from = oldText[i] || ''
            const to = newText[i] || ''
            const start = Math.floor(Math.random() * 40)
            const end = start + Math.floor(Math.random() * 40)
            this.queue.push({
                from,
                to,
                start,
                end
            })
        }
        cancelAnimationFrame(this.frameRequest)
        this.frame = 0
        this.update()
        return promise
    }
    update() {
        let output = ''
        let complete = 0
        for (let i = 0, n = this.queue.length; i < n; i++) {
            let {
                from,
                to,
                start,
                end,
                char
            } = this.queue[i]
            if (this.frame >= end) {
                complete++
                output += to
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.1) {
                    char = this.randomChar()
                    this.queue[i].char = char
                }
                output += `<span>${char}</span>`
            } else {
                output += from
            }
        }
        this.el.innerHTML = output
        if (complete === this.queue.length) {
            this.resolve()
        } else {
            this.frameRequest = requestAnimationFrame(this.update)
            this.frame++
        }
    }
    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)]
    }
}

const splash_texts = [
    'a programmer',
    'a designer',
    'Stephen Miller'
];

const about_texts = [
    'About me',
    'Stephen Miller'
];

const scroll_texts = [
    '\\ scroll down /'
];

const splash_element = new TextScramble(document.querySelector('#splash-text'));
const about_element = new TextScramble(document.querySelector('#about_me_text'));
const scroll_element = new TextScramble(document.querySelector('.scroll-down-text'));

let counter1 = 0;
const about_scramble = () => {
    about_element.setText(about_texts[counter1]).then(() => {
        setTimeout(about_scramble, 3000);
    })
    counter1 = (counter1 + 1) % about_texts.length;
}

let counter2 = 0;
const splash_scramble = () => {
    splash_element.setText(splash_texts[counter2]).then(() => {
        setTimeout(splash_scramble, 1500);
    })
    counter2 = (counter2 + 1) % splash_texts.length;
    AsciiMorph.morph(asciis[counter2]);
}

setTimeout(function(){ scroll_element.setText(scroll_texts[0]); }, 6000);

setTimeout(function(){ splash_scramble(); }, 1500);

about_scramble();
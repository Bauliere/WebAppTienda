const PALETTES = ['default', 'pink', 'dark', 'red', 'purple'];

const PaletteManager = {
  KEY: 'palette',
  COOKIE_KEY: 'palette',
  apply(name) {
    if (!PALETTES.includes(name)){
        name = 'default';
    } 
    //document.body.dataset.palette = name === 'pink' ? '' : name;
    const root = document.documentElement;
    root.classList.add(name);
    root.classList.remove(...PALETTES.filter(p => p !== name));
    localStorage.setItem(this.KEY, name);
    document.cookie = `${this.COOKIE_KEY}=${name}; path=/; max-age=31536000`;
  },
  current() {
    return localStorage.getItem(this.KEY) || 'default';
  },
  init() {
    this.apply(this.current());
  }
};

document.addEventListener('DOMContentLoaded', () => PaletteManager.init());
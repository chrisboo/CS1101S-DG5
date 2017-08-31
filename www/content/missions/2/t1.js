function fractal(pic, n) {
    if (n === 1) {
        return pic;
    } else {
        return beside(pic, fractal(stack(pic, pic), n - 1));
    }
}

// Credit: DG5 - Ze Yang
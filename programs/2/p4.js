function combo_price(combo) {
    if (is_biggie_size(combo)) {
        return unbiggie_size(combo) * 1.17 + 0.50;
    } else {
        return combo * 1.17;
    }
}
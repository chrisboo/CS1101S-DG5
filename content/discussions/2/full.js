function biggie_size(regular_combo) {
    return regular_combo + 4;
}

// Alternative solution
function biggie_size_2(regular_combo) {
    if (regular_combo === 1) {
        return 5;
    } else if (regular_combo === 2) {
        return 6;
    } else if (regular_combo === 3) {
        return 7;
    } else if (regular_combo === 4) {
        return 8;
    } else {
        
    }
}

function unbiggie_size(biggie_size) {
    return biggie_size - 4;
}

function is_biggie_size(combo) {
    return (5 <= combo && combo <= 8);
}

function combo_price(combo) {
    if (is_biggie_size(combo)) {
        return unbiggie_size(combo) * 1.17 + 0.50;
    } else {
        return combo * 1.17;
    }
}

function empty_order() {
    return 0;
}

function add_to_order(order, combo) {
    return order * 10 + combo;
}

function last_combo(order) {
    return order % 10;
}

function other_combos(order) {
    return (order - last_combo(order)) / 10;
}
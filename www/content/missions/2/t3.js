function spiral(gradient, n) {
    if (gradient === 0 || n === 0) {
        return blank_bb;
    } else {
        return stack_frac(
                   gradient, 
                   hook(gradient / 2), 
                   quarter_turn_right(
                       spiral(gradient, n - 1)));
    }
}
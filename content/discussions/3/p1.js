function sum_of_squares_of_two_larger_numbers(x, y, z) {
    function square(a) {
        return a * a;
    }

    function sum_of_squares(a, b) {
        return square(a) + square(b);
    }

    if (x < y && x < z) {
        return sum_of_squares(y, z);
    } else if (y < z) {
        return sum_of_squares(x, z);
    } else {
        return sum_of_squares(x, y);
    }
}
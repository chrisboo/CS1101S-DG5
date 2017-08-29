function is_leap_year(year) {
    return (year % 4 == 0 && year % 100 == 0) || (year % 400 == 0);
}

// Standard solution
function is_leap_year(year) {
    if (!divisible_by_4(year)) {
        return false;
    } else if (!divisible_by_100(year)) {
        return true;
    } else if (!divisible_by_400(year)) {
        return false;
    } else {
        return true;
    }
}
function accumulate_n(op, init, seqs) {
    if (is_empty_list(head(seqs))) {
        return [];
    } else {
        return pair(accumulate(op, init, map(head, seqs)),
                    accumulate_n(op, init, map(tail, seqs)));
    }
}
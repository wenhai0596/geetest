var Base64 = {
    "$_JGH": function(e){
        var t = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789()";
        return e < 0 || e >= t["length"] ? "." : t.charAt(e);
    },
    "$_JIY": function(e, t) {
        return e >> t & 1;
    },
    "$_JJM": function(e, o) {
        var $this = this;
        function t(e, t) {
            for (var n = 0, r = 24 - 1; 0 <= r; r -= 1) {
                1 === $this["$_JIY"](t, r) && (n = (n << 1) + $this["$_JIY"](e, r));
            }
            return n;
        }

        for (var n = "", r = "", a = e["length"], s = 0; s < a; s += 3) {
            var c;
            if (s + 2 < a) {
                c = (e[s] << 16) + (e[s + 1] << 8) + e[s + 2];
                n += this["$_JGH"](t(c, 7274496)) + this["$_JGH"](t(c, 9483264)) + this["$_JGH"](t(c, 19220)) + this["$_JGH"](t(c, 235));
            } else {
                var u = a % 3;
                2 == u ? (c = (e[s] << 16) + (e[s + 1] << 8), n += this["$_JGH"](t(c, 7274496)) + this["$_JGH"](t(c, 9483264)) + this["$_JGH"](t(c, 19220)), r = ".") : 1 == u && (c = e[s] << 16, n += this["$_JGH"](t(c, 7274496)) + this["$_JGH"](t(c, 9483264)), r = "." + ".");
            }
        }
        return {'res': n, 'end': r}
    },
    "encode": function (e) {
        var t = this["$_JJM"](e);
        return t["res"] + t["end"];
    }

}

// 使用方法，直接将要加密的字节数组传入方法即可
var result = Base64["encode"]([92,25,128,...])
console.log(result);

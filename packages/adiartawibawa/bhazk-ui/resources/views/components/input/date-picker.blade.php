@props([
    'value' => null,
    'name' => null,
    'placeholder' => 'Pilih tanggal',
])

{{--
    Kombinasi trigger + panel kalender dalam satu scope Alpine — sengaja
    reimplementasi logic kalender di sini (bukan menyusun ulang komponen
    calendar.blade.php), supaya state "selected" mudah dibagi antara trigger
    button dan grid tanpa perlu komunikasi lintas-scope Alpine yang rumit.
--}}
<div x-data="{
    open: false,
    selected: @js($value),
    viewYear: @js($value ? (int) date('Y', strtotime($value)) : (int) date('Y')),
    viewMonth: @js($value ? (int) date('n', strtotime($value)) : (int) date('n')),
    weekdays: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
    monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
    get monthLabel() { return this.monthNames[this.viewMonth - 1] + ' ' + this.viewYear; },
    get displayLabel() {
        if (!this.selected) return @js($placeholder);
        const [y, m, d] = this.selected.split('-');
        return d + ' ' + this.monthNames[parseInt(m) - 1] + ' ' + y;
    },
    get daysGrid() {
        const firstDay = new Date(this.viewYear, this.viewMonth - 1, 1).getDay();
        const totalDays = new Date(this.viewYear, this.viewMonth, 0).getDate();
        const cells = [];
        for (let i = 0; i < firstDay; i++) cells.push(null);
        for (let d = 1; d <= totalDays; d++) cells.push(d);
        return cells;
    },
    prevMonth() { this.viewMonth--; if (this.viewMonth < 1) { this.viewMonth = 12;
            this.viewYear--; } },
    nextMonth() { this.viewMonth++; if (this.viewMonth > 12) { this.viewMonth = 1;
            this.viewYear++; } },
    pad(n) { return n < 10 ? '0' + n : '' + n; },
    dateStr(d) { return this.viewYear + '-' + this.pad(this.viewMonth) + '-' + this.pad(d); },
    selectDay(d) { if (!d) return;
        this.selected = this.dateStr(d);
        this.open = false; },
    isSelected(d) { return d && this.selected === this.dateStr(d); },
    isToday(d) {
        const t = new Date();
        return d === t.getDate() && this.viewMonth === (t.getMonth() + 1) && this.viewYear === t.getFullYear();
    }
}" x-on:click.outside="open = false" x-on:keydown.escape.window="open = false"
    class="relative inline-block">
    @if ($name)
        <input type="hidden" name="{{ $name }}" x-bind:value="selected" />
    @endif

    <button type="button" x-on:click="open = !open" x-text="displayLabel" {{ $attributes->class(['input']) }}></button>

    <div x-show="open" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-cloak
        class="absolute z-50 mt-2 bg-base-100 border border-base-300 shadow-lg rounded-box p-4 w-72">
        <div class="flex items-center justify-between mb-3">
            <button type="button" class="btn btn-ghost btn-sm btn-circle" x-on:click="prevMonth()"
                aria-label="Bulan sebelumnya">‹</button>
            <span class="font-semibold text-sm" x-text="monthLabel"></span>
            <button type="button" class="btn btn-ghost btn-sm btn-circle" x-on:click="nextMonth()"
                aria-label="Bulan berikutnya">›</button>
        </div>

        <div class="grid grid-cols-7 gap-1 text-center text-xs mb-1">
            <template x-for="wd in weekdays" :key="wd">
                <span class="opacity-60" x-text="wd"></span>
            </template>
        </div>

        <div class="grid grid-cols-7 gap-1">
            <template x-for="(day, index) in daysGrid" :key="index">
                <button type="button" x-text="day || ''" x-on:click="selectDay(day)" x-bind:disabled="day === null"
                    class="btn btn-ghost btn-sm btn-square"
                    x-bind:class="{
                        'btn-primary': isSelected(day),
                        'btn-outline': isToday(day) && !isSelected(day),
                        'invisible pointer-events-none': day === null
                    }"></button>
            </template>
        </div>
    </div>
</div>

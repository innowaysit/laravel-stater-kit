'use strict';
(function (jQuery) {
    function changeView(value) {
        switch (value) {
            case 'day':
                window.cal.changeView('day', true);
                break;
            case 'week':
                window.cal.changeView('week', true);
                break;
            case 'month':
                window.cal.changeView('month', true);
                break;
        }
    }

    function randerRangeText() {
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
        const startDate = window.cal.getDateRangeStart()
        const endDate = window.cal.getDateRangeEnd()
        const year = startDate.getFullYear()
        const month = months[startDate.getMonth()]
        console.log(window.cal.getDateRangeEnd())
        console.log(month, year)
        console.log('cal-range-render')
    }

    function createSchedule(){
        window.cal.createSchedules([
            {
                id: '1',
                calendarId: '1',
                title: 'my schedule',
                category: 'time',
                dueDateClass: '',
                start: '2021-03-22T22:30:00+09:00',
                end: '2021-03-23T02:30:00+09:00'
            },
            {
                id: '2',
                calendarId: '1',
                title: 'second schedule',
                category: 'time',
                dueDateClass: '',
                start: '2021-03-22T17:30:00+09:00',
                end: '2021-03-23T17:31:00+09:00'
            },
            {
                id: '3',
                calendarId: '2',
                title: 'Meeting of design team',
                category: 'time',
                bgColor: '#F35421',
                color: '#ffffff',
                borderColor: '#DA4701',
                dueDateClass: '',
                start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T04:30+09:00', 
                end: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T05:10+09:00',
            },
            {
                id: '4',
                calendarId: '2',
                title: 'Guru Tegh Bahadurs Martyrdom Day',
                category: 'time',
                bgColor: '#5773FF',
                color: '#ffffff',
                borderColor: '#3D44EB',
                dueDateClass: '',
                start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T05:30+09:00',                 
                end: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T06:50+09:00', 
            },
            {
                id: '5',
                calendarId: '2',
                title: 'Interview with Marie',
                category: 'time',
                bgColor: '#50C6B4',
                color: '#ffffff',
                borderColor: '#2C8779',
                dueDateClass: '',
                start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T07:15+09:00', 
                end: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T08:10+09:00',
            }
        ])  
    }

    window.cal = new tui.Calendar('#calendar', {
        defaultView: 'day',
        taskView: true,
        template: {
            monthDayname: function(dayname) {
                return '<span class="calendar-week-dayname-name">' + dayname.label + '</span>';
            }
        }
    });
    window.addEventListener('resize', function() {
        window.cal.render();
    });
    $('#cal-type').on('change', function() {
        changeView($(this).val())
    })
    $('#cal-next').on('click', function() {
        window.cal.next()
    })

    $('#cal-prev').on('click', function() {
        window.cal.prev()
    })
    console.log(randerRangeText())
    createSchedule();
})(jQuery);
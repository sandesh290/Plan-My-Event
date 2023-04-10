<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="ticket.css" rel="stylesheet">
</head>

<body>

    <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-danger">Back</a>
    </div>
    <div class="ticket" id="printTable">
        <div class="left">
            <div class="imag"
                style="background:url({{ $ticket->event->getFirstMediaUrl() }}); background-size:contain;">
                <div class="ticket-number">
                    <p>
                        #{{ $ticket->id }}
                    </p>
                </div>
            </div>
            <div class="ticket-info">
                <p class="date">
                    <span>{{ $ticket->created_at->format('D') }}</span>
                    <span class="june-29">{{ $ticket->created_at->format('M') }}</span>
                    <span>{{ $ticket->created_at->format('Y') }}</span>
                </p>
                <div class="show-name">
                    <h1>{{ $ticket->event->event_name }}</h1>
                </div>
                <h2>{{ $ticket->name }}</h2>
                <h5>{{ $ticket->phone }}</h5>

                <p class="location"><span>Event Location </span>
                    <span class="separator"><i
                            class="far fa-smile"></i></span><span>{{ $ticket->event->event_location }}</span>
                </p>
            </div>
        </div>
        <div class="right">

            <div class="right-info-container">
                <div class="show-name">
                    <h1>{{ $ticket->event->event_name }}</h1>
                </div>


                <div class="barcode">
                    <div class="visible-print text-center">
                        {!! QrCode::size(100)->generate(route('ticket-scanner', $ticket->id)) !!}
                    </div>
                </div>
                <p class="ticket-number">
                    #{{ $ticket->id }}
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

</body>

</html>

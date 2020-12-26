
        var state = {
            'querySet': newsData,
        
            'page': 1,
            'rows': 3,
            'window': 3,
        }
        
        buildTable()
        
        function pagination(querySet, page, rows) {
        
            var trimStart = (page - 1) * rows
            var trimEnd = trimStart + rows
        
            var trimmedData = querySet.slice(trimStart, trimEnd)
        
            var pages = Math.round(querySet.length / rows);
        
            return {
                'querySet': trimmedData,
                'pages': pages,
            }
        }
        
        function pageButtons(pages) {
            var wrapper = document.getElementById('pagination-wrapper')
        
            wrapper.innerHTML = ``
            console.log('Pages:', pages)
        
            var maxLeft = (state.page - Math.floor(state.window / 2))
            var maxRight = (state.page + Math.floor(state.window / 2))
        
            if (maxLeft < 1) {
                maxLeft = 1
                maxRight = state.window
            }
        
            if (maxRight > pages) {
                maxLeft = pages - (state.window - 1)
                
                if (maxLeft < 1){
                    maxLeft = 1
                }
                maxRight = pages
            }
            
            
        
            for (var page = maxLeft; page <= maxRight; page++) {
                wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-info">${page}</button>`
            }
        
            if (state.page != 1) {
                wrapper.innerHTML = `<button value=${1} class="page btn btn-sm btn-info">&#171; First</button>` + wrapper.innerHTML
            }
        
            if (state.page != pages) {
                wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-info">Last &#187;</button>`
            }
        
            $('.page').on('click', function() {
                $('#page-news').empty()
        
                state.page = Number($(this).val())
        
                buildTable()
            })
        
        }
        
        
        function buildTable() {
            var table = $('#page-news')
        
            var data = pagination(state.querySet, state.page, state.rows)
            var myList = data.querySet
        
            for (var i = 1 in myList) {
                //Keep in mind we are using "Template Litterals to create rows"
                var row = `<ul>
                          <li>${myList[i].judul}</li>
                          <li>${myList[i].waktu}</li>
                          <li>${myList[i].gambar}</li>
                          <li>${myList[i].teks}</li>
                          <li>${myList[i].selanjutnya}</li>
                          </ul>
                          `
                table.append(row)
            }
        
            pageButtons(data.pages)
        }

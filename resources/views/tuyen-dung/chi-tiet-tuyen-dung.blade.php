@extends('main')
@php
use Carbon\Carbon;
@endphp
@section('content')
<div class="container-3" id="scrollContainer">
    <div class="content-section-4">
        <div class="header-section-5">
            <div class="container-custom-14">
                @foreach($jobs as $job)


                <div class="icon-recruitment-1">
                    <img src="{{ asset('/public/images/tuyen-dung/Frame-1.svg') }}" alt="Icon">
                </div>
                <div class="info-recrment-detail">
                    <div class="role-recruitment-detail">{{ $job->roleCategory->category_name ?? 'N/A' }}</div>
                    <div class="position-recruitment-detail"> {{ $job->positionCategory->category_name ?? 'N/A' }}</div>
                </div>
                <div class="recruitment-details">
                    <div class="location-recruitment">
                        <div class="icon-recruitment"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.4789 5.45988C13.6902 2.15451 10.6629 0.666382 8.00377 0.666382H7.99625C5.3446 0.666382 2.30986 2.14736 1.52112 5.45272C0.642246 9.14443 3.01596 12.2709 5.16432 14.2384C5.92581 14.9404 6.94401 15.3329 8.00377 15.333C9.02536 15.333 10.047 14.9682 10.8357 14.2384C12.9841 12.2709 15.3578 9.15159 14.4789 5.45988ZM8.00377 9.04427C7.69303 9.04427 7.38534 8.98598 7.09826 8.87272C6.81118 8.75946 6.55033 8.59346 6.33061 8.38419C6.11089 8.17492 5.93659 7.92647 5.81768 7.65305C5.69877 7.37962 5.63756 7.08656 5.63756 6.79061C5.63756 6.49466 5.69877 6.2016 5.81768 5.92817C5.93659 5.65475 6.11089 5.4063 6.33061 5.19703C6.55033 4.98776 6.81118 4.82176 7.09826 4.7085C7.38534 4.59524 7.69303 4.53695 8.00377 4.53695C8.63132 4.53695 9.23317 4.77439 9.67692 5.19703C10.1207 5.61968 10.37 6.1929 10.37 6.79061C10.37 7.38832 10.1207 7.96154 9.67692 8.38419C9.23317 8.80683 8.63132 9.04427 8.00377 9.04427Z"
                                    fill="#A3A3A3" />
                            </svg>
                        </div>
                        <span>{{ $job->locationCategory->category_name ?? 'N/A' }}</span>
                    </div>
                    <div class="time-recruitment">
                        <div class="icon-recruitment"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.35 15.57C16.2999 15.6552 16.2334 15.7296 16.1544 15.7889C16.0753 15.8482 15.9852 15.8912 15.8894 15.9154C15.7935 15.9396 15.6939 15.9445 15.5961 15.9299C15.4984 15.9152 15.4045 15.8812 15.32 15.83L12.22 13.98C11.45 13.52 10.88 12.51 10.88 11.62V7.52C10.88 7.11 11.22 6.77 11.63 6.77C12.04 6.77 12.38 7.11 12.38 7.52V11.62C12.38 11.98 12.68 12.51 12.99 12.69L16.09 14.54C16.45 14.75 16.57 15.21 16.35 15.57Z"
                                    fill="#A3A3A3" />
                            </svg>
                        </div>
                        @php
                        Carbon::setLocale('vi');
                        $createdAt = $job->created_at ?
                        Carbon::parse($job->created_at)->setTimezone('Asia/Ho_Chi_Minh') : null;
                        $now = Carbon::now('Asia/Ho_Chi_Minh');
                        @endphp
                        <span>
                            @if($createdAt)
                            {{ $createdAt->diffForHumans($now) }}
                            @else
                            N/A
                            @endif
                        </span>
                    </div>
                </div>
                <div class="{{ $job->status == 0 ? 'status-recruitment-details' : 'status-recruitment-red-details' }}">
                    <div class="{{ $job->status == 0 ? 'status-text-details' : 'status-text-red-details' }}">
                        {{ $job->status == 0 ? 'Đang tuyển' : 'Đã hết hạn' }}
                    </div>
                </div>
                <div class="image-result">
                    <div class="image-wrapper-details">
                        <img src="{{ asset('/public/images/tuyen-dung/'. $job->url_job_details) }}"
                            alt="Placeholder Image" class="responsive-image">
                    </div>
                </div>
                @endforeach


                <div class="container-details">
                    <div class="title-details">Chi tiết tin tuyển dụng</div>
                    <table class="details-table">
                        <tbody>
                            <tr>
                                <th>Vị trí</th>
                                <td>{{ $jobDetail->vi_tri ?? 'Không có thông tin' }}</td>
                            </tr>
                            <tr>
                                <th>Số lượng</th>
                                <td>
                                    @if ($jobDetail && $jobDetail->total !== null)
                                    @php
                                    // Thêm số 0 đằng trước nếu tổng dưới 10
                                    $totalFormatted = $jobDetail->total < 10 ? '0' . $jobDetail->total :
                                        $jobDetail->total;
                                        @endphp
                                        {{ $totalFormatted }} Người
                                        @else
                                        Không có thông tin
                                        @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Nơi làm việc</th>
                                <td>{{ $jobDetail->workplace ?? 'Không có thông tin' }}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ làm việc</th>
                                <td>{{ $jobDetail->work_address ?? 'Không có thông tin' }}</td>
                            </tr>
                            <tr>
                                <th>Mô tả công việc</th>
                                <td>
                                    @php
                                    // Kiểm tra xem job_description có tồn tại hay không
                                    $paragraphs = isset($jobDetail->job_description)
                                    ? explode("\n", $jobDetail->job_description)
                                    : [];
                                    @endphp

                                    @forelse($paragraphs as $paragraph)
                                    <p>{!! nl2br(e($paragraph)) !!}</p>
                                    @empty
                                    <p>Không có thông tin</p>
                                    @endforelse
                                </td>

                            </tr>
                            <tr>
                                <th>Ngày làm việc</th>
                                <td>
                                    @if($jobDetail && $jobDetail->workday)
                                    {{ \Carbon\Carbon::parse($jobDetail->workday)->format('d/m/Y') }}
                                    @else
                                    Không có thông tin
                                    @endif
                                </td>

                            </tr>
                            <tr>
                                <th>Giờ làm việc</th>
                                <td>{{ $jobDetail->business_hours ?? 'Không có thông tin' }}</td>
                            </tr>
                            <tr>
                                <th>Quyền lợi</th>
                                <td>
                                    @php
                                    // Kiểm tra xem interests có tồn tại hay không
                                    $interests = isset($jobDetail-> interest)
                                    ? explode("\n", $jobDetail-> interest)
                                    : [];
                                    @endphp

                                    @forelse($interests as $interest)
                                    <p>{!! nl2br(e($interest)) !!}</p>
                                    @empty
                                    <p>Không có thông tin</p>
                                    @endforelse
                                </td>

                            </tr>
                            <tr>
                                <th>Yêu cầu</th>
                                <td>
                                    @php
                                    // Kiểm tra xem interests có tồn tại hay không
                                    $requests = isset($jobDetail-> request)
                                    ? explode("\n", $jobDetail-> request)
                                    : [];
                                    @endphp

                                    @forelse($requests as $request)
                                    <p>{!! nl2br(e($request)) !!}</p>
                                    @empty
                                    <p>Không có thông tin</p>
                                    @endforelse
                                </td>

                            </tr>
                            <tr>
                                <th>Độ tuổi</th>
                                <td>{{ $jobDetail->age ?? 'Không có thông tin' }}</td>
                            </tr>
                            <tr>
                                <th>Trình độ</th>
                                <td>{{ $jobDetail->level ?? 'Không có thông tin' }}</td>
                            </tr>
                            <tr>
                                <th>Hồ sơ gồm</th>
                                <td>
                                    Thông tin ứng tuyển:
                                    <p>Ứng viên vui lòng gửi CV đến email: <a
                                            href="mailto:tuyendung@damsenpark.vn">tuyendung@damsenpark.vn</a>.</p>
                                    @php
                                    // Kiểm tra xem interests có tồn tại hay không
                                    $profile_includeds = isset($jobDetail-> profile_included )
                                    ? explode("\n", $jobDetail-> profile_included )
                                    : [];
                                    @endphp

                                    @forelse($profile_includeds as $profile_included)
                                    <p>{!! nl2br(e($profile_included)) !!}</p>
                                    @empty
                                    <p>Không có thông tin</p>
                                    @endforelse
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="container-recruitment-cv">
                    <div class="header-recruitment">Ứng tuyển Online</div>
                    <div class="left-column">
                        <div class="field">
                            <label for="name">Họ tên</label>
                            <input type="text" id="name" class="input" value="Nguyễn Văn A">
                        </div>
                        <div class="field">
                            <label for="birthdate">Năm sinh</label>
                            <input type="text" id="birthdate" class="input" value="12-12-2000">
                        </div>
                        <div class="field">
                            <label for="address">Nơi ở hiện nay</label>
                            <input type="text" id="address" class="input" value="123 Âu Cơ, Phường 9, Tân Bình, TP HCM">
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="input" value="Nguyenvana@gmail.com">
                        </div>
                        <div class="field">
                            <label for="education">Trình độ</label>
                            <input type="text" id="education" class="input" value="Đại học">
                        </div>
                        <div class="field">
                            <label>Bạn có sẵn sàng đi công tác dài ngày</label>
                            <div class="options">
                                <div class="option">
                                    <input type="radio" id="travel-yes" name="travel" checked>
                                    <label for="travel-yes">Có</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="travel-conditional" name="travel">
                                    <label for="travel-conditional">Tùy thời điểm</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="travel-no" name="travel">
                                    <label for="travel-no">Không</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="field">
                            <label for="gender">Giới tính</label>
                            <div class="options">
                                <div class="option">
                                    <input type="radio" id="gender-male" name="gender" checked>
                                    <label for="gender-male">Nam</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="gender-female" name="gender">
                                    <label for="gender-female">Nữ</label>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label for="birthplace">Nơi sinh</label>
                            <input type="text" id="birthplace" class="input" value="Phường 6, Quận Tân Bình, TP HCM">
                        </div>
                        <div class="field">
                            <label for="phone">Điện thoại</label>
                            <div class="phone">
                                <div class="phone-prefix">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="18" height="18" fill="url(#pattern0_272_52715)" />
                                        <defs>
                                            <pattern id="pattern0_272_52715" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_272_52715"
                                                    transform="translate(-0.0915033 -0.0915033) scale(0.00231056)" />
                                            </pattern>
                                            <image id="image0_272_52715" width="512" height="512"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7d15mFxlmTbw+zlV1dVdnYSEgMomJOlOAp3e0gTZAgGCCw7O6Eycz23cEBAUEARERR0dZ8D9c0RH1HE+HB0UB3VcBk1UgkBA6PSWJnS6k4BA9s7ee9V5vj+qA6HTSXo5Vc95z7l/18XFhZLqm06n3rve8y4AEREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREYWLWAcgouBsXHJaqdc9tSxb4k/NeV7Sy/ke4B0DAPA17YtkAMATnaq+JAFAPM36KvsAwFPthScD+Vfz9/gJz0/4fjY56O3zZ+7rm/XgM/0m/2FEFDgWAKIQ27jktNKhvVNmQeUkQI73RGeqrzNVZKYAMwGdCcjxAI4DMBNAeYEj9QDoBrAD0O2AdCvQLard4km3r9IN6HaIvpCatn8jCwNReLEAEBl6sqEhNc0bPCXheyf6Of8ECGarYrY3/HcITgPgWeechF0ANkCwAYoNItigkM0C3ZSRkrUnNjb2WgckiisWAKIieLKhITV9aGien0C1QGsUqBFgAYCT4fYAPxk+gOcVWCNAq0JavRzadqdSHWc2Ng5ZhyOKOhYAooA9W109I1viVeVy2gDoGSJSBehCAGXW2RwxBKATgnZAngLQqAltn/tE2wbrYERRwgJANAm6bFmia926+ZLwz1OV8wE9H8As61xRJMBmVWmE6MOe5z3S35/9c1V7+6B1LiJXsQAQjUN7VdWU0tJkne/750HlfIieD2C6da6Y6gGkGdCHIfLI4EDukar29p3WoYhcwQJAdASbGhoy+3MDF4nI6xW4YPi5fVyf2Yedr8AaACsTigfKEiUPcpEh0eGxABCNsG5R9Wwvh6Xqy+UQXQqg1DoTTUi/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B+OmH8AfVfGTFBI/n9XcvNs6EFGxsQBQ7D13zjllff37z5P8HQSXAzjDOhMVgGKDAisEWJHrG3yA0/sUdywARCOsW1Q928thqQJL4eP1EEy1zkQT0ifAIwqsAPxfVja1P2UdiChMWACIjmDjktNKs3uPuRC+/3oILgBQCyBhnYtGlQXQCsVKqD6QnLH/oVkPPtNvHYoorFgAiMahpaamfEpK6n3fPw8q50P0PPCiIiv7AWkB9GGIPJL0vT/xWT7R2LEAEE2CLluW6Fq3br4k/PNU5XxAG8A1BAUhwGZVaYTow57nPbILyce5N59o4lgAiAL2bHX1jGyJV5XLaQOgZ4hIFaD1ADLW2RwxBKATgnZAngLQqAltn/tE2wbrYERRwgJAVAR/XLIkedLeHZUCVAOohaIakAV63JaqAAABsUlEQVTIH1mcNI5nJQvgOUDXQNAGoEWBthemHdd50YMPZq3DEUUdCwCRoScbGlJTfP/4pGRPUB+zIZititne8N8hOBVuLzrcBWADBBug2CCCDb5ig/je5tJMZsMpq1b1WQckiisWAKIQ66yoSHvl5acqsichIa9Q35upojM90Znqy0wIjlNgpgccr4qZBd+yqNgngm4f2C5ANxQ7xNNuX6VbVLrF87uR021ZTWxK9PY+U9nVNVDQPEQ0YSwARBHSXlVVMsXzyvuSyTIvmS0FABn0jpGE7ykkpapTAMBTTFEgBQACDPmC/QAgIvsFOqQiqp7uBgA/m+wvy2b79vt+T1V7+6DVfxsREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREVG0/X8q+S4DDHV3jwAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    +84
                                </div>
                                <input type="tel" id="phone" class="phone-number" value="0123456789">
                            </div>
                        </div>
                        <div class="field">
                            <label for="facebook">Facebook cá nhân</label>
                            <input type="text" id="facebook" class="input" value="facebook.com.vn">
                        </div>
                        <div class="field">
                            <label for="cv">Đính kèm CV</label>
                            <div class="cv-upload">
                                <input type="file" id="cv" class="input-file">
                                <label for="cv" class="custom-file-upload">
                                    <span class="cv-text">Không có tập tin nào được chọn</span>
                                    <span class="cv-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.5 22C9.96667 22 8.66667 21.4667 7.6 20.4C6.53333 19.3333 6 18.0333 6 16.5V6C6 4.9 6.39167 3.95833 7.175 3.175C7.95833 2.39167 8.9 2 10 2C11.1 2 12.0417 2.39167 12.825 3.175C13.6083 3.95833 14 4.9 14 6V15.5C14 16.2 13.7583 16.7917 13.275 17.275C12.7917 17.7583 12.2 18 11.5 18C10.8 18 10.2083 17.7583 9.725 17.275C9.24167 16.7917 9 16.2 9 15.5V6H10.5V15.5C10.5 15.7833 10.596 16.021 10.788 16.213C10.98 16.405 11.2173 16.5007 11.5 16.5C11.7833 16.5 12.021 16.404 12.213 16.212C12.405 16.02 12.5007 15.7827 12.5 15.5V6C12.5 5.3 12.2583 4.70833 11.775 4.225C11.2917 3.74167 10.7 3.5 10 3.5C9.3 3.5 8.70833 3.74167 8.225 4.225C7.74167 4.70833 7.5 5.3 7.5 6V16.5C7.5 17.6 7.89167 18.5417 8.675 19.325C9.45833 20.1083 10.4 20.5 11.5 20.5C12.6 20.5 13.5417 20.1083 14.325 19.325C15.1083 18.5417 15.5 17.6 15.5 16.5V6H17V16.5C17 18.0333 16.4667 19.3333 15.4 20.4C14.3333 21.4667 13.0333 22 11.5 22Z"
                                                fill="#0054A6" />
                                        </svg>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <label>Bạn có sẵn sàng làm thêm giờ</label>
                            <div class="options">
                                <div class="option">
                                    <input type="radio" id="overtime-yes" name="overtime" checked>
                                    <label for="overtime-yes">Có</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="overtime-conditional" name="overtime">
                                    <label for="overtime-conditional">Tùy thời điểm</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="overtime-no" name="overtime">
                                    <label for="overtime-no">Không</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-map">
                        <div class="work-experience">
                            <div class="title-map">
                                <span class="title-bold">Những nơi đã từng làm việc trước đây </span>
                                <span class="title-regular">(ghi rõ vị trí)</span>
                            </div>
                            <div class="input-box">
                                <textarea class="input-textarea"
                                    placeholder="Những nơi đã từng làm việc trước đây"></textarea>
                            </div>
                        </div>
                        <div class="personal-experience">
                            <div class="title-bold">Kinh nghiệm bản thân</div>
                            <div class="input-box">
                                <textarea class="input-textarea" placeholder="Kinh nghiệm bản thân"></textarea>
                            </div>
                        </div>
                        <div class="submit-button">
                            <div class="submit-text">Gửi ngay</div>
                        </div>
                    </div>

                </div> -->
                <form id="uploadForm" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container-recruitment-cv">
                        <div class="header-recruitment">Ứng tuyển Online</div>
                        <div class="left-column">
                            <div class="field">
                                <label for="name">Họ tên</label>
                                <input type="text" id="name" name="ho_ten" class="input" value="Nguyễn Văn A">
                            </div>
                            <div class="field">
                                <label for="birthdate">Năm sinh</label>
                                <input type="text" id="birthdate" name="age" class="input" value="12-12-2000">
                            </div>
                            <div class="field">
                                <label for="address">Nơi ở hiện nay</label>
                                <input type="text" id="address" name="current_residence" class="input"
                                    value="123 Âu Cơ, Phường 9, Tân Bình, TP HCM">
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="input" value="Nguyenvana@gmail.com">
                            </div>
                            <div class="field">
                                <label for="education">Trình độ</label>
                                <input type="text" id="education" name="level" class="input" value="Đại học">
                            </div>
                            <div class="field">
                                <label>Bạn có sẵn sàng đi công tác dài ngày</label>
                                <div class="options">
                                    <div class="option">
                                        <input type="radio" id="travel-yes" name="willing_to_travel" value="1" checked>
                                        <label for="travel-yes">Có</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" id="travel-conditional" name="willing_to_travel" value="2">
                                        <label for="travel-conditional">Tùy thời điểm</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" id="travel-no" name="willing_to_travel" value="0">
                                        <label for="travel-no">Không</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="field">
                                <label for="gender">Giới tính</label>
                                <div class="options">
                                    <div class="option">
                                        <input type="radio" id="gender-male" name="sex" value="1" checked>
                                        <label for="gender-male">Nam</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" id="gender-female" name="sex" value="0">
                                        <label for="gender-female">Nữ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label for="birthplace">Nơi sinh</label>
                                <input type="text" id="birthplace" name="place_of_birth" class="input"
                                    value="Phường 6, Quận Tân Bình, TP HCM">
                            </div>
                            <div class="field">
                                <label for="phone">Điện thoại</label>
                                <div class="phone">
                                    <div class="phone-prefix">
                                        <img src="{{ asset('/public/images/tuyen-dung/icon-vn.svg') }}" alt="Icon">
                                        +84
                                    </div>
                                    <input type="tel" name="phone" id="phone" class="phone-number" value="0123456789">
                                </div>
                            </div>
                            <div class="field">
                                <label for="facebook">Facebook cá nhân</label>
                                <input type="text" name="url_facebook" id="facebook" class="input"
                                    value="facebook.com.vn">
                            </div>
                            <div class="field">
                                <label for="cv">Đính kèm CV</label>
                                <div class="cv-upload">
                                    <input type="file" id="cv" name="file_path" class="input-file">
                                    <label for="cv" class="custom-file-upload">
                                        <span id="cv-text" class="cv-text">Không có tập tin nào được chọn</span>
                                        <span class="cv-icon">
                                            <img src="{{ asset('/public/images/tuyen-dung/material-symbols_attach-file.svg') }}"
                                                alt="Icon">
                                        </span>
                                    </label>

                                </div>

                            </div>
                            <div class="field">
                                <label>Bạn có sẵn sàng làm thêm giờ</label>
                                <div class="options">
                                    <div class="option">
                                        <input type="radio" id="overtime-yes" name="willing_to_work_overtime" value="1"
                                            checked>
                                        <label for="overtime-yes">Có</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" id="overtime-conditional" name="willing_to_work_overtime"
                                            value="2">
                                        <label for="overtime-conditional">Tùy thời điểm</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" id="overtime-no" name="willing_to_work_overtime" value="0">
                                        <label for="overtime-no">Không</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-map">
                            <div class="work-experience">
                                <div class="title-map">
                                    <span class="title-bold">Những nơi đã từng làm việc trước đây </span>
                                    <span class="title-regular">(ghi rõ vị trí)</span>
                                </div>
                                <div class="input-box">
                                    <textarea class="input-textarea" name="previous_experiences"
                                        placeholder="Những nơi đã từng làm việc trước đây"></textarea>
                                </div>
                            </div>
                            <div class="personal-experience">
                                <div class="title-bold">Kinh nghiệm bản thân</div>
                                <div class="input-box">
                                    <textarea class="input-textarea" name="personal_experience"
                                        placeholder="Kinh nghiệm bản thân"></textarea>
                                </div>
                            </div>
                            <div class="submit-button">
                                <button type="submit" class="submit-text">Gửi ngay</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    @include('footer')
</div>

@endsection
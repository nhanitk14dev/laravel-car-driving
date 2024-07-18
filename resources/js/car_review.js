document.addEventListener("DOMContentLoaded", function () {
    const $reviewData = $("#reviewData");
    if ($reviewData.length) {
        const endpoint = $reviewData.attr("data-url");
        fetchReviewData(endpoint);
    }
});

function fetchReviewData(endpoint) {
    $.ajax({
        url: endpoint,
        type: "GET",
        success: handleReviewData,
        error: handleError,
    });
}

function handleReviewData(data) {
    const review = data.GetReviewsFromCapIDResult.reviewlist.review;
    handleVideo(review.videolist.video, review.reviewid);
    handleReviewParagraphs(review.paragraphlist.paragraph);
    handlePhotos(review.photolist.photo);
}

function handleVideo(video, reviewId) {
    const videoUrl = `http://www.caranddriving.com/cdwebsite/player.aspx?w=580&id=${video.doc_id}&cid=demo`;
    const videoContainer = $("#video-container");

    if (videoUrl) {
        videoContainer.html(`<iframe id="${reviewId}" src="${videoUrl}" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" align="middle" width="580" height="376" allowfullscreen></iframe>`);
    } else {
        videoContainer.html("<p>No video available</p>");
    }
}

function handleReviewParagraphs(paragraphs) {
    const reviewContainer = $("#review-container");

    if (paragraphs && paragraphs.length > 0) {
        const reviewHtml = paragraphs
            .map((p) => `<h4>${p.headline}</h4><p>${p.text}</p>`)
            .join("");
        reviewContainer.html(reviewHtml);
    } else {
        reviewContainer.html("<p>No review available</p>");
    }
}

function handlePhotos(photos) {
    const photoContainer = $("#photo-container");

    if (photos && photos.length > 0) {
        const reviewPhotos = photos.slice(0, 6);
        const photoHtml = reviewPhotos
            .map((photo) => `<div class="photo-item col-lg-2 col-md-4 col-sm-12 my-2"><img src="${photo.std}" alt="Car Photo"></div>`)
            .join("");
        photoContainer.html(photoHtml);
    } else {
        photoContainer.html("<p>No photos available</p>");
    }
}

function handleError(xhr, status, error) {
    console.error("Error fetching review data:", error);
    $("#video-container").html("<p>Error fetching review data.</p>");
    $("#review-container").html("<p>Error fetching review data.</p>");
    $("#photo-container").html("<p>Error fetching review data.</p>");
}
